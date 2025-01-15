<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Provider\id_ID\Person;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ktp = fake('id_ID')->nik();
        $gender = substr($ktp, 6, 1) > 3 ? 'Female' : 'Male';
            $birthdateFull = substr($ktp, 6, 6);
            $day = (int) substr($birthdateFull, 0, 2);
            $day = $day > 40 ? $day - 40 : $day;
            $birthdate = '19' . substr($birthdateFull, 4, 2) . '-' . substr($birthdateFull, 2, 2) . '-' . sprintf('%02d', $day);
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'nomor_ktp' => $ktp,
            'address' => fake()->address(),
            'gender' => $gender,
            'birthdate' => $birthdate,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
