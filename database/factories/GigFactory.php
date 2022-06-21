<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gig>
 */
class GigFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'title' => $this->faker->sentence(),
      'tags' => $this->faker->word(4, true),
      'company' => $this->faker->company(),
      'location' => $this->faker->city(),
      'email' => $this->faker->email(),
      'website' => $this->faker->url(),
      'salary' => $this->faker->numberBetween(10000, 200000),
      'description' => $this->faker->paragraph(3, true),
    ];
  }
}