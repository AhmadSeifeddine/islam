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
        //     'name' => 'Ahmad Seif',
        //     'email' => '1@1.com',
        //     'password' => Hash::make('12345678'),
        //     'email_verified_at' => now(),
        // ]);

        User::where('id', 1)->update([
            'password' => Hash::make('12345678')
        ]);

        // $this->call([
        //     RolePermission::class,
        // ]);
    }
}

