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
        Schema::create('produitfinis', function (Blueprint $table) {
            $table->increments('ID_pf');
            $table->string('Refpf');
            $table->string('Prixestime');
            $table->string('Description');
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
        Schema::dropIfExists('produitfinis');
    }
};
