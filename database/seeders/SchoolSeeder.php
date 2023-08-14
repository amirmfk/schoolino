<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\schoolclass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::factory(20)->create()
            ->each(function($school) {
                schoolclass::create([
                    'school_id' => $school->id,
                    'name'=>fake()->name(),
                    'base' => fake()->numberBetween(1,12),
                    'Major'=>fake()->name()
                ]);
            });
    }
}
