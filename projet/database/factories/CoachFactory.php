<?php

namespace Database\Factories;

use App\Models\coach;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coach>
 */
class CoachFactory extends Factory
{

    protected $model = coach::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' =>$this->faker->name(),
            'adress' =>$this->faker->address(),
            'email' =>$this->faker->freeEmail(),
            'numero' =>$this->faker->randomDigit(),
            'prix' =>$this->faker->randomDigit()
        ];
    }
}
