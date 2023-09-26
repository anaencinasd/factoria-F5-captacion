<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requirement;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Requirement::create([
            'name'=>'jpa'
        ]);

        Requirement::create([
            'name'=>'ric'
        ]);

        Requirement::create([
            'name'=>'talleres'
        ]);

        Requirement::create([
            'name'=>'ejercicios'
        ]);
    }
}
