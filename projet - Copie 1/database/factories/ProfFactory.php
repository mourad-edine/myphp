<?php

namespace Database\Factories;

use App\Models\Prof;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prof>
 */
class ProfFactory extends Factory
{
    protected $model = Prof::class;
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
