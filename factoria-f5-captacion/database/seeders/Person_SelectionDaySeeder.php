<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Person_SelectionDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'comment' => 'Est es un comentario de prueba',
            'stage' => 'Jornada de selección',
            'id_user' => 1,
            'id_person' => 1, 
     ]);
    }
}
