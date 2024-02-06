<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
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
