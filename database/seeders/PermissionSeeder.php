<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Dashboard Permission
        Permission::create([
            'name' => 'dashboard_access',
            'display_name' => 'Access Dashboard',
            'description' => 'Can access dashboard'
        ]);

        Permission::create([
            'name' => 'privilege_access',
            'display_name' => 'Access Privilege',
            'description' => 'Can access privilege'
        ]);

        // User Management
        Permission::create(['name' => 'users_view', 'display_name' => 'View Users', 'description' => 'Can view users']);
        Permission::create(['name' => 'users_create', 'display_name' => 'Create Users', 'description' => 'Can create users']);
        Permission::create(['name' => 'users_edit', 'display_name' => 'Edit Users', 'description' => 'Can edit users']);
        Permission::create(['name' => 'users_delete', 'display_name' => 'Delete Users', 'description' => 'Can delete users']);
        Permission::create(['name' => 'users_status', 'display_name' => 'Toggle User Status', 'description' => 'Can toggle user status']);

        // Writing Management
        Permission::create(['name' => 'writing_view', 'display_name' => 'View Articles', 'description' => 'Can view articles']);
        Permission::create(['name' => 'writing_create', 'display_name' => 'Create Articles', 'description' => 'Can create articles']);
        Permission::create(['name' => 'writing_edit', 'display_name' => 'Edit Articles', 'description' => 'Can edit articles']);
        Permission::create(['name' => 'writing_delete', 'display_name' => 'Delete Articles', 'description' => 'Can delete articles']);
        Permission::create(['name' => 'writing_status', 'display_name' => 'Toggle Article Status', 'description' => 'Can toggle article status']);

        // Scholar Management
        Permission::create(['name' => 'scholars_view', 'display_name' => 'View Scholars', 'description' => 'Can view scholars']);
        Permission::create(['name' => 'scholars_create', 'display_name' => 'Create Scholars', 'description' => 'Can create scholars']);
        Permission::create(['name' => 'scholars_edit', 'display_name' => 'Edit Scholars', 'description' => 'Can edit scholars']);
        Permission::create(['name' => 'scholars_delete', 'display_name' => 'Delete Scholars', 'description' => 'Can delete scholars']);
        Permission::create(['name' => 'scholars_status', 'display_name' => 'Toggle Scholar Status', 'description' => 'Can toggle scholar status']);
        Permission::create(['name' => 'scholars_homepage', 'display_name' => 'Toggle Scholar Homepage', 'description' => 'Can toggle scholar homepage']);

        // Category Management
        Permission::create(['name' => 'categories_view', 'display_name' => 'View Categories', 'description' => 'Can view categories']);
        Permission::create(['name' => 'categories_create', 'display_name' => 'Create Categories', 'description' => 'Can create categories']);
        Permission::create(['name' => 'categories_edit', 'display_name' => 'Edit Categories', 'description' => 'Can edit categories']);
        Permission::create(['name' => 'categories_delete', 'display_name' => 'Delete Categories', 'description' => 'Can delete categories']);

        // Book Management
        Permission::create(['name' => 'books_view', 'display_name' => 'View Books', 'description' => 'Can view books']);
        Permission::create(['name' => 'books_create', 'display_name' => 'Create Books', 'description' => 'Can create books']);
        Permission::create(['name' => 'books_edit', 'display_name' => 'Edit Books', 'description' => 'Can edit books']);
        Permission::create(['name' => 'books_delete', 'display_name' => 'Delete Books', 'description' => 'Can delete books']);
        Permission::create(['name' => 'books_status', 'display_name' => 'Toggle Book Status', 'description' => 'Can toggle book status']);

        // Book Explanation Management
        Permission::create(['name' => 'explanations_view', 'display_name' => 'View Book Explanations', 'description' => 'Can view book explanations']);
        Permission::create(['name' => 'explanations_create', 'display_name' => 'Create Book Explanations', 'description' => 'Can create book explanations']);
        Permission::create(['name' => 'explanations_edit', 'display_name' => 'Edit Book Explanations', 'description' => 'Can edit book explanations']);
        Permission::create(['name' => 'explanations_delete', 'display_name' => 'Delete Book Explanations', 'description' => 'Can delete book explanations']);
        Permission::create(['name' => 'explanations_status', 'display_name' => 'Toggle Explanation Status', 'description' => 'Can toggle explanation status']);

        // Youtube Management
        Permission::create(['name' => 'youtubes_view', 'display_name' => 'View Youtube Videos', 'description' => 'Can view youtube videos']);
        Permission::create(['name' => 'youtubes_create', 'display_name' => 'Create Youtube Videos', 'description' => 'Can create youtube videos']);
        Permission::create(['name' => 'youtubes_edit', 'display_name' => 'Edit Youtube Videos', 'description' => 'Can edit youtube videos']);
        Permission::create(['name' => 'youtubes_delete', 'display_name' => 'Delete Youtube Videos', 'description' => 'Can delete youtube videos']);
        Permission::create(['name' => 'youtubes_status', 'display_name' => 'Toggle Youtube Status', 'description' => 'Can toggle youtube video status']);
    }
}

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Get all permissions
        $allPermissions = Permission::all()->pluck('id')->toArray();

        // Super Admin - Gets all permissions
        $superAdmin = Role::where('name', 'super_admin')->first();
        $superAdmin->permissions()->attach($allPermissions);

        // Admin - Gets most permissions except some super admin specific ones
        $admin = Role::where('name', 'admin')->first();
        $adminPermissions = Permission::whereNotIn('name', ['users_delete'])->pluck('id')->toArray();
        $admin->permissions()->attach($adminPermissions);

        // Scholar Manager
        $scholarManager = Role::where('name', 'scholar_manager')->first();
        $scholarPermissions = Permission::where('name', 'like', 'scholars_%')
            ->orWhere('name', 'dashboard_access')
            ->pluck('id')->toArray();
        $scholarManager->permissions()->attach($scholarPermissions);

        // Writing Manager
        $writingManager = Role::where('name', 'writing_manager')->first();
        $writingPermissions = Permission::where('name', 'like', 'writing_%')
            ->orWhere('name', 'dashboard_access')
            ->pluck('id')->toArray();
        $writingManager->permissions()->attach($writingPermissions);

        // Youtube Manager
        $youtubeManager = Role::where('name', 'youtube_manager')->first();
        $youtubePermissions = Permission::where('name', 'like', 'youtubes_%')
            ->orWhere('name', 'dashboard_access')
            ->pluck('id')->toArray();
        $youtubeManager->permissions()->attach($youtubePermissions);

        // Regular User
        $user = Role::where('name', 'user')->first();
        $userPermissions = Permission::whereIn('name', [
            'dashboard_access',
            'writing_view',
            'scholars_view',
            'books_view',
            'youtubes_view'
        ])->pluck('id')->toArray();
        $user->permissions()->attach($userPermissions);
    }
}
