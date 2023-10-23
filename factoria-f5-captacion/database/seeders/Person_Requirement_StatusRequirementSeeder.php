<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Person_Requirement_StatusRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('person__requirement_statusRequirements')->insert([
            'id_person' => 1, 
            'id_requirement' => 1, 
            'id_statusRequirement' => 1, 
     ]);
    }
}
