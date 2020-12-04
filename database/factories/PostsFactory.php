<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    protected $model = Posts::class;

    public function definition()
    {
        return [
            'ref_user_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'post' => $this->faker->sentence($nbWords = 20),
            'ref_parent_post' => $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}