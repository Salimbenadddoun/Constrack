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
        Schema::create('sorties', function (Blueprint $table) {
            $table->increments('ID_Sortie');
            $table->string('MontantS', 50);
            $table->date('DateSortie');
            $table->unsignedInteger('ID_Phase');
            $table->foreign('ID_Phase')->references('ID_Phase')->on('Phases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorties');
    }
};
