<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Predstava>
 */
class PredstavaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'zanr' => $this->faker->randomElement($array = array('Komedija', 'Drama', 'Mjuzikal','Misterija', 'Romanticna')),
            'sala' => $this->faker->numberBetween($min = 1, $max = 10),
            'trajanje' => $this->faker->numberBetween($min = 60, $max = 120),
        ];
    }
}
