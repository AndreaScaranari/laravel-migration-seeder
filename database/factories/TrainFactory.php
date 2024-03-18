<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'business_name' => fake()->company(),
        'starting_station' => fake()->city(),
        'last_station' => fake()->city(),
        'on_day' => fake()->date(),
        'departure_time' => fake()->time(),
        'arrival_time' => fake()->time(),
        'train_code' => fake()->ean8(),
        'cars_number' => rand(8, 22),
        'on_time' => rand(0, 1),
        'canceled' => rand(0, 1),
        ];
    }
}
