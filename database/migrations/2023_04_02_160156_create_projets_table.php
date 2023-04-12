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
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('ID_Projet');
            $table->string('Nom', 50);
            $table->date('Datedebut');
            $table->date('Datefin');
            $table->string('Budget', 50);
            $table->string('Adresse', 50);
            $table->string('Ville', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
