<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Posetilac;
use App\Models\Predstava;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karta>
 */
class KartaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'iznos' => $this->faker->numberBetween($min = 200, $max = 1000),
            'brojSedista' => $this->faker->numberBetween($min = 1, $max = 200),
            'nacinPlacanja' => $this->faker->randomElement($array = array('kartica', 'gotovina')),
            'posetilac_id' => Posetilac::factory(),
            'predstava_id' => Predstava::factory(),
        ];
    }
}
