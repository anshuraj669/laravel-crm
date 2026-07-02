<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => now(),
                'phone' => '+880123456789',
                'role' => 'admin',
            ]
        );

        User::factory(50)->create([
            'phone' => fake()->phoneNumber(),
        ]);
    }
}
