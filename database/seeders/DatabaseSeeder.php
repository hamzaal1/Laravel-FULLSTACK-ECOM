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
        
        \App\Models\User::factory()->create([
            'name' => 'Hamza.Admin',
            'email' => 'admin@example.com',
            'is_admin' => true,
            'password' => Hash::make('test'),
        ]);
        \App\Models\User::factory(1)->create();
    }
}
