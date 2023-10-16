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
            'name'=>'JPA'
        ]);

        Requirement::create([
            'name'=>'RIC'
        ]);

        Requirement::create([
            'name'=>'Talleres F5'
        ]);

        Requirement::create([
            'name'=>'Ejercicios'
        ]);
        Requirement::create([
            'name'=>'Segundo formulario'
        ]);
    }
}
