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
        Schema::create('lignesorties', function (Blueprint $table) {
            $table->integer('ID_Sortie')->unsigned();
            $table->integer('ID_Catalogue')->unsigned();
            $table->string('PrixSortie');
            $table->string('QntSortie');
            $table->primary(['ID_Sortie', 'ID_Catalogue']);
            $table->foreign('ID_Sortie')->references('ID_Sortie')->on('Sorties');
            $table->foreign('ID_Catalogue')->references('ID_Catalogue')->on('Catalogues');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignesorties');
    }
};
