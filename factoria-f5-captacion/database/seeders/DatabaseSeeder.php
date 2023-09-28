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
<<<<<<< HEAD
            RequirementSeeder::class,
=======
>>>>>>> f48ae6b7f37939f49fa14c594aaf2df1299071d7
            StatusRequirementSeeder::class,
        
        ]);
    }
}
