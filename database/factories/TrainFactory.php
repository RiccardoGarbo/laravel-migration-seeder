<?php

namespace Database\Factories;
use App\Models\Train;

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
            'agency' => fake()->company(),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'train_code' => fake()->randomNumber(5 , true),
            'number_of_carriages' => fake()->randomNumber(2, false),
            'on_time' => rand(0,1),
            'deleted' => rand(0,1)
        ];
    }
}
