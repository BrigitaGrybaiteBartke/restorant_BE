<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'price' => $this->faker->randomNumber(2, true),
            'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
            'restaurants_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
