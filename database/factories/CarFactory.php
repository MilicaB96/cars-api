<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->randomElement(['audi', 'bmw', 'tesla']),
            'model' =>  Str::random(10),
            'year' => $this->faker->numberBetween(1990, 2022),
            'max_speed' => $this->faker->numberBetween(20, 300),
            'is_automatic' => $this->faker->boolean(),
            'engine' => $this->faker->randomElement(['diesel', 'electric', 'petrol', 'hybird']),
            'number_of_doors' =>  $this->faker->numberBetween(2, 5),

        ];
    }
}
