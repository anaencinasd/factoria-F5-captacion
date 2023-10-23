<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SelectionDay;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SelectionDay>
 */
class SelectionDayFactory extends Factory
{
    protected $model = \App\Models\SelectionDay::class;
    public function definition(): array
    {
        return [
            'school' => $this->faker->word,
            'date' => $this->faker->word,
            'link' => $this->faker->word,
            'comment' =>$this->faker->word,
            'document' =>$this->faker->word,
        ];
    }
}