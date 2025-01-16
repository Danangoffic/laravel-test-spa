<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        User::factory()->create([
            'name' => 'super admin',
            'email' => 'admin@gmail.com',
            'nomor_ktp' => '123',
            'address' => fake()->address(),
            'gender' => 'Male',
            'birthdate' => now(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('123123123')
        ]);
    }
}
