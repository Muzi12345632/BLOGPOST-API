<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id'=>\App\Models\User::inRandomOrder()->first()->id,
            'post_id'=>\App\Models\Posts::inRandomOrder()->first()->id,
            'review'=>$this->faker->sentence($nbWords=40, $variableWords=true),
        ];
    }
}
