<?php

namespace Database\Factories;

use App\Models\Institution;
use App\Models\Position;
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
            'customer_id' => strtoupper("C" . rand()),
            'name' => fake()->name,
            'email' => fake()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'position_id' => Position::inRandomOrder()->first()->id,
            'regional_origin' => fake()->streetAddress(),
            'institution_id' => Institution::inRandomOrder()->first()->id,
        ];
    }
}
