<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusRequirement;

class StatusRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusRequirement::create([
            'name'=>'En seguimiento'
        ]);

        StatusRequirement::create([
            'name'=>'Segundo formulario completado'
        ]);

        StatusRequirement::create([
            'name'=>'Sin respuesta'
        ]);

        StatusRequirement::create([
            'name'=>'Fuera (duplicado, baja, prueba, error, etc'
        ]);
        StatusRequirement::create([
            'name'=>'Confirma asistencia'
        ]);
        StatusRequirement::create([
            'name'=>'Asiste'
        ]);
        StatusRequirement::create([
            'name'=>'Ha participado'
        ]);
        StatusRequirement::create([
            'name'=>'No ha participado'
        ]);
        StatusRequirement::create([
            'name'=>'Completos'
        ]);
        StatusRequirement::create([
            'name'=>'No acabados'
        ]);
        StatusRequirement::create([
            'name'=>'Sin comenzar'
        ]);
        StatusRequirement::create([
            'name'=>'Faltan enlaces'
        ]);
        StatusRequirement::create([
            'name'=>'Convocadx a Jornada de Selección'
        ]);
    }
}
