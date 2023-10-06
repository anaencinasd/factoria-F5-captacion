<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('person__requirement_statusRequirements', function (Blueprint $table) {
            $table->bigInteger('id_person');
            $table->bigInteger('id_requirement');
            $table->bigInteger('id_statusRequirement');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person__requirements');
    }
};
