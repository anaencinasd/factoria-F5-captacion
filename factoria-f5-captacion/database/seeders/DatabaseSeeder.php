<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Requirement;
use App\Models\SelectionDay;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RequirementSeeder::class,
            StatusRequirementSeeder::class,
            CommentSeeder::class,
            Person_Requirement_StatusRequirementSeeder::class,
            Person_SelectionDaySeeder::class,
            SelectionDaySeeder::class,   
        ]);

        \App\Models\Comment::factory(3)->create();
        \App\Models\Requirement::factory(3)->create();
        \App\Models\SelectionDay::factory(3)->create();


    }
}
