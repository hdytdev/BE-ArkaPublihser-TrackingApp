<?php

namespace Database\Factories;

use App\Models\Institution;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => strtoupper("C".rand()),
            'name' => fake()->name,
            'email' => fake()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'regional_origin' => fake()->streetAddress(),
            'position' => fake()->companySuffix(),
            'institution_id' => Institution::inRandomOrder()->first()->id,
        ];
    }
}
