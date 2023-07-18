<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posetilac>
 */
class PosetilacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imePrezime' => $this->faker->name(),
            'godine' => $this->faker->numberBetween($min = 7, $max = 100),
            'kontakt' => $this->faker->phoneNumber(),
            
        ];
    }
}
