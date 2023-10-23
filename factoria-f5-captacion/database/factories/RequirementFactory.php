<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Requirements;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requirements>
 */
class RequirementFactory extends Factory
{
    protected $model = \App\Models\Requirement::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->word,
            
        ];
    }
}