<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ForumCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comments'=>$this->faker->word(100),
            'forum_thread_id'=>mt_rand(1, 20)
        ];
    }
}
