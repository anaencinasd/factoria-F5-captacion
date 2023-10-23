<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentFactory extends Factory
{
    protected $model = \App\Models\Comment::class;

    public function definition(): array
    {
        return [
            'comment' => $this->faker->word,
            'stage' => $this->faker->word,
            'id_user' => User::factory(),
            'id_person' =>1,
        ];
    }
}