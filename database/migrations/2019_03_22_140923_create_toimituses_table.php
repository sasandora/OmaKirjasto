<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToimitusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toimitus', function (Blueprint $table) {
            $table->increments('id'); // Pääavain
            $table->integer('toimittajaid')->nullable($value = true); // Vierasavain
            $table->integer('kauppapaikkaid')->nullable($value = true); // Vierasavain
            $table->string('tilausaika');
            $table->string('maksettuaika')->nullable($value = true);
            $table->string('postikulut')->nullable($value = true);
            $table->string('saapumisaika')->nullable($value = true);
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
        Schema::dropIfExists('toimitus');
    }
}
