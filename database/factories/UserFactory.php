<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        return [
            'title' => fake()->title(),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'profile_picture' => fake()->optional()->imageUrl(),
            'cv_path' => fake()->optional()->filePath(),
            'cover_letter_path' => fake()->optional()->filePath(),
            'phone' => fake()->optional()->phoneNumber(),
            'salary' => fake()->numberBetween(30000, 100000),
            'first_line' => fake()->streetAddress(),
            'second_line' => fake()->optional()->secondaryAddress(),
            'town' => fake()->optional()->city(),
            'city' => fake()->optional()->city(),
            'county' => fake()->optional()->state(),
            'country' => fake()->country(),
            'post_code' => fake()->postcode(),
            'full_or_part' => fake()->randomElement(['full-time', 'part-time']),
            'region' => fake()->state(),
            'timezone' => fake()->timezone(),
            'start_date' => fake()->date(),
            'end_date' => fake()->optional()->date(),
            'is_live' => fake()->boolean(),
            'role' => fake()->randomElement(['user', 'admin', 'super admin']),
            'seniority' => fake()->randomElement(['junior', 'mid', 'senior']),
            'department_id' => fake()->optional()->randomNumber(),
            'job_id' => fake()->optional()->randomNumber(),
            'holiday_entitlement_id' => fake()->optional()->randomNumber(),
            'contact_id' => fake()->optional()->randomNumber(),
            'contract_id' => fake()->optional()->randomNumber(),
            'created_by' => fake()->optional()->randomNumber(),
            'updated_by' => fake()->optional()->randomNumber(),
            'deleted_by' => fake()->optional()->randomNumber(),
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
