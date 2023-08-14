<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school-name' => fake()->name(),
            'school-address' => fake()->address(),
            'manager-name' => fake()->name(),
            'base' => fake()-> numberBetween(1,12),
        ];
    }
}
