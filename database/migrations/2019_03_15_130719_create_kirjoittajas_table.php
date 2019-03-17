<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKirjoittajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kirjoittaja', function (Blueprint $table) {
            $table->increments('id'); //Pääavain
            $table->string('nimi');
            $table->string('kuvaus')->nullable($value = true);
            $table->string('syntymaaika')->nullable($value = true);
            $table->string('kuolinaika')->nullable($value = true);
            $table->string('syntymapaikka')->nullable($value = true);
            $table->string('alias')->nullable($value = true);
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
        Schema::dropIfExists('kirjoittaja');
    }
}
