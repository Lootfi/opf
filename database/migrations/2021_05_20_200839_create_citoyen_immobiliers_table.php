<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitoyenImmobiliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citoyen_immobiliers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('immobilier_id');
            $table->foreign('immobilier_id')->references('id')->on('immobiliers')->onDelete('cascade');

            $table->unsignedBigInteger('citoyen_id');
            $table->foreign('citoyen_id')->references('id')->on('citoyens')->onDelete('cascade');


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
        Schema::dropIfExists('citoyen_immobiliers');
    }
}
