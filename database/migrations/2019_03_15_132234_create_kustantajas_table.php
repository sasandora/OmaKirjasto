<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKustantajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kustantaja', function (Blueprint $table) {
            $table->increments('id'); //Pääavain
            $table->string('nimi');
            $table->string('kotipaikka')->nullable($value = true);
            $table->year('perustamisvuosi')->nullable($value = true);
            $table->year('lopettamisvuosi')->nullable($value = true);
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
        Schema::dropIfExists('kustantaja');
    }
}
