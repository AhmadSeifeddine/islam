<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Ahmad Seif',
            'email' => 'ahmadSeif@athari.site',
            'password' => Hash::make('athari@03004699.lara'),
            'email_verified_at' => now(),
        ]);
    }
}

