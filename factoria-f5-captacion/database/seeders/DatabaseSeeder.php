<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
    }
}
