<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuva', function (Blueprint $table) {
            $table->increments('id');   // Pääavain
            $table->integer('kirjaid')->nullable($value = true); // Vierasavain
            $table->string('url');
            $table->string('kansiOnEi')->nullable($value = true);
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
        Schema::dropIfExists('kuva');
    }
}
