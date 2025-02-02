<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'super_admin',
            'display_name' => 'Super Administrator', // Optional
            'description' => 'User has access to all system functionality', // Optional
        ]);

        // Content Manager Role
        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'User who manages all content related functionality',
        ]);

        // Scholar Role
        Role::create([
            'name' => 'scholar_manager',
            'display_name' => 'Scholar Manager',
            'description' => 'User who can access the Scholar Management',
        ]);

        // Writer Role
        Role::create([
            'name' => 'writing_manager',
            'display_name' => 'Writing Manager',
            'description' => 'User who can access the Writing Management',
        ]);

        // Youtube Manager Role
        Role::create([
            'name' => 'youtube_manager',
            'display_name' => 'Youtube Manager',
            'description' => 'User who can access the Youtube Management',
        ]);

        // User Manager Role
        Role::create([
            'name' => 'user',
            'display_name' => 'User',
            'description' => 'User who can access the User Management',
        ]);
    }
}
