<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToimittajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toimittaja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nimimerkki');
            $table->string('myyjannimi')->nullable($value = true);
            $table->string('osoite')->nullable($value = true);
            $table->string('puhelin')->nullable($value = true);
            $table->string('email')->nullable($value = true);
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
        Schema::dropIfExists('toimittaja');
    }
}
