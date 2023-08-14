<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\schoolclass;
use App\Models\Student;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        School::factory(20)->create()
            ->each(function($school) {
                schoolclass::create([
                    'school_id' => fake()->numberBetween(1,12),
                    'name'=>fake()->name(),
                    'base' => fake()->numberBetween(1,12),
                    'Major'=>fake()->name()
                ]);
            });

        School::factory(20)->create()
            ->each(function($student) {
                Student::create([
                    'schoolclass_id' => fake()->numberBetween(1,12),
                    'name'=>fake()->name(),
                    'lastname'=>fake()->name(),
                    'father-name'=>fake()->name(),
                    'base' => fake()->numberBetween(1,12),
                    'Major'=>fake()->name()
                ]);
            });


  }
}
