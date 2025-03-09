<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Rafeh Saifan',
        //     'email' => 'rafeh@athari.site',
        //     'password' => Hash::make('rafehsaifan@123@123'),
        //     'email_verified_at' => now(),
        // ])->addRole('super_admin');

        // User::where('id', 2)->update([
        //     'password' => Hash::make('idkpass881@@')

        // User::where('id', 1)->update([
        //     'password' => Hash::make('12345678')
        // ]);

        // $this->call([
        //     RolePermission::class,
        // ]);
    }
}

