<?php

namespace Database\Factories;

use App\Models\Drink;
use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'user_id' => User::all()->random()->id,
          'drink_id'=> Drink::all()->random()->id,
          'food_id'=> Food::all()->random()->id,
        ];
    }
}
