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
        Schema::create('phases', function (Blueprint $table) {
            $table->increments('ID_Phase');
            $table->string('NomPhase', 50);
            $table->string('BudgetPhase', 50);
            $table->date('Datedebut');
            $table->string('Duree', 50);
            $table->date('Datefin');
            $table->string('Etat', 50);
            $table->integer('ID_Projet')->unsigned();
            $table->timestamps();

            $table->foreign('ID_Projet')->references('ID_Projet')->on('Projets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phases');
    }
};
