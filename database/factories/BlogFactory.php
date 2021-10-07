<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'subline' => $this->faker->text($maxNbChars = 200),
            'content' => $this->faker->text($maxNbChars = 200),
            'status' => true,
        ];
    }
}
