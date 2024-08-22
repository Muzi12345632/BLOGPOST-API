<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
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
            'title'=> $this->faker->word(),
            'description'=> $this->faker->sentence($nbWords=10, $variableWords=true),
            'amount' => $this->faker->numberBetween(20,1000),
            'condition' => $this->faker->randomElement([\App\Models\Posts::BRAND_NEW, \App\Models\Posts::SECOND_HAND]),
            'expires_at'=> $this->faker->dateTimeBetween('+3 weeks', '+3 months'),
            'location_id' => \App\Models\Location::inRandomOrder()->first()->id,
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            
        ];
    }
}
