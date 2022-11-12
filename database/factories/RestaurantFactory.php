<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(2, true),
            'city' => $this->faker->city(),
            'address' => $this->faker->streetAddress(),
            'workingTime' => $this->faker->numerify('Monday - Sunday; Working hours: 1# - 1# val.')
        ];
    }
}
