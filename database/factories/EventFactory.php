<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->text(30),
            "venue"=>$this->faker->city(),
            "description"=>$this->faker->text(250),
            "image"=>$this->faker->image(),
        ];
    }
}
