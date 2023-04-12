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
        Schema::create('ligneventes', function (Blueprint $table) {
            $table->integer('ID_pf')->unsigned();
            $table->integer('ID_Vente')->unsigned();
            $table->string('PrixV');
            $table->string('QntV');
            $table->primary(['ID_pf', 'ID_Vente']);
            $table->foreign('ID_pf')->references('ID_pf')->on('Produitfinis');
            $table->foreign('ID_Vente')->references('ID_Vente')->on('Ventes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligneventes');
    }
};
