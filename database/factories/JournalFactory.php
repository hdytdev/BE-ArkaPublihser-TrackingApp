<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'abbreviation'=>fake()->title(),
      'name'=>fake()->name(),
      'apc_charge'=>fake()->randomDigit(),
      'processing_time'=>fake()->title(),
      'category'=>Arr::random(["internal","external","scopus"]),
      'focus'=>fake()->title(),
      'scope'=>fake()->title(),
      'index'=>fake()->title(),
      'accreditation'=>fake()->title(),
      'journal_link'=>fake()->title(),
      'issn'=>fake()->title(),
      'publisher'=>fake()->title(),
    ];
  }
}
