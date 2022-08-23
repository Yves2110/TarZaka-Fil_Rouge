<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('locataire_id')->constrained();
            $table->foreignId('mois_id')->constrained();
            $table->foreignId('maison_id')->constrained();
            $table->string('intituler');
            $table->string('numero_serie')->unique();
            $table->string('total_a_payer')->nullable();
            $table->string('total_payer');
            $table->string('reste_a_payer');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
