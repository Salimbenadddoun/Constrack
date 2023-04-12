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
        Schema::create('ligneachats', function (Blueprint $table) {
            $table->integer('ID_Catalogue')->unsigned();
            $table->integer('ID_Achat')->unsigned();
            $table->string('PAchat');
            $table->string('QntAchat');
            $table->primary(['ID_Catalogue', 'ID_Achat']);
            $table->foreign('ID_Catalogue')->references('ID_Catalogue')->on('Catalogues');
            $table->foreign('ID_Achat')->references('ID_Achat')->on('Achats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligneachats');
    }
};
