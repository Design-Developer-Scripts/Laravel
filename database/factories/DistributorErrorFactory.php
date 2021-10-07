<?php

namespace Database\Factories;

use App\Models\DistributorError;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistributorErrorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DistributorError::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from_email' => $this->faker->unique()->safeEmail(),
            'to_email' => $this->faker->unique()->safeEmail(),
            'subject' => $this->faker->text($maxNbChars = 25),
            'content' => $this->faker->text($maxNbChars = 200),
            'created_at' => date('Y-m-d H:i:s'),
        ];
    }
}
