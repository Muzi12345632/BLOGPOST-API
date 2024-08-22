<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
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
            'district' => $this->faker->name(),
            'province'=> $this->faker->sentence($nbWords=2, $variableWords=true),
            'city' => $this->faker->name(),
        ];
    }
}
