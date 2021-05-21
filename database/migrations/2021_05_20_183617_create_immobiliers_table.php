<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobiliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobiliers', function (Blueprint $table) {
            $table->id();

            $table->enum('type', ['Terrain', 'Hangar', 'Maison', 'Appartement', 'Batiment']);
            $table->string('commune');
            $table->string('rue')->nullable();
            $table->integer('numero')->unsigned();
            $table->float('superficie_total');

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
        Schema::dropIfExists('immobiliers');
    }
}
