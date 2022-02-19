<?php

namespace Database\Factories;

use App\Models\ForumSection;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word(),
            'image'=>$this->faker->image(),
            'description'=>$this->faker->text(100),
            'forum_section_id'=>mt_rand(1, 10)
        ];
    }
}
