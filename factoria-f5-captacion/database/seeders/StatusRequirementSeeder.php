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
            'name'=>'Realizado'
        ]);

        StatusRequirement::create([
            'name'=>'No realizado'
        ]);

        StatusRequirement::create([
            'name'=>'Un aviso'
        ]);

        StatusRequirement::create([
            'name'=>'Dos avisos'
        ]);
    }
}
