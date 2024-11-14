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
            'name' => fake()->name(),
            'username' => fake()->unique()->username(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            // True or False operator in PHP

            // Ternary Operator
            // Var1 = $Statement1 ? $Statement1 : $Statement2 (If, statement 1 is true than change it into statement 1, 
            // if it false change it into statement 2)

            // Elvis Operator
            // $Var2 = $Statement3 ?: $Stament4 (Simplified Version from above)

            // Null Coalescing Operator
            // $Statement5 ??= $Statement6 (More Simplified)
            'password' => static::$password ??= Hash::make('password'),
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
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_admin' => true,
        ]);
    }
}
