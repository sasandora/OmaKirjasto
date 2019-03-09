<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teos', function (Blueprint $table) {
            $table->increments('id');               //Pääavain
            $table->integer('kirjoittaja-id')->nullable($value = true);	    //Vierasavain
            $table->integer('kustantaja-id')->nullable($value = true);	    //Vierasavain
            $table->string('alkupe-nimi')->nullable($value = true);	
            $table->string('suomi-nimi')->nullable($value = true);	
            $table->integer('painos')->nullable($value = true);	
            $table->string('kunto')->nullable($value = true);	
            $table->string('tyyppi')->nullable($value = true);	
            $table->string('status')->nullable($value = true);	
            $table->string('hinta')->nullable($value = true);	
            $table->string('suomentaja')->nullable($value = true);	
            $table->date('vuosi')->nullable($value = true);	
            $table->string('kuvittaja')->nullable($value = true);	
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
        Schema::dropIfExists('teos');
    }
}
