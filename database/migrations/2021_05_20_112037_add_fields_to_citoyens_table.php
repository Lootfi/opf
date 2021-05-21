<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCitoyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('citoyens', function (Blueprint $table) {
            $table->string('lieu_naiss', 200)->default('N/A');
            $table->date('date_naiss')->nullable();
            $table->bigInteger('n_carte_identite');
            $table->string('adresse', 200)->default('N/A');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citoyens', function (Blueprint $table) {
            $table->dropColumn(
                'lieu_naiss',
                'date_naiss',
                'n_carte_identite',
                'adresse'
            );
        });
    }
}
