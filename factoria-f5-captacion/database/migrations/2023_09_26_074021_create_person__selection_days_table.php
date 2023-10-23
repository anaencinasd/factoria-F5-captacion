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
        Schema::create('person__selection_days', function (Blueprint $table) {
            $table->bigInteger('id_person');
            $table->bigInteger('id_selection_day');
            $table->string('school')->default("Sin asignar")->nullable();
            $table->text('comments')->default("No hay comentarios")->nullable();
            $table->string('turn')->default("Mañana")->nullable();
            $table->string('decission')->default("En el proceso")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person__selection_days');
    }
};
