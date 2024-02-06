<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'dish_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
