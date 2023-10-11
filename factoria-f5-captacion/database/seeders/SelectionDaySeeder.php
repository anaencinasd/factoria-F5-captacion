<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelectionDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('person__selection_days')->insert([
            'id_person' => 1,
            'id_selection_day' => 1,
            'school' => 'Asturias',
            'comments' => 'aqui se puede escribir lo que se quiera', 
            'turn' => 'Mañana',
            'decission' => 'Pendiente',
     ]);
    }
}
