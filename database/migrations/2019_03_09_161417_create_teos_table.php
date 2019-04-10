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
            $table->integer('kirjoittajaid')->nullable($value = true);	    //Vierasavain
            $table->integer('kustantajaid')->nullable($value = true);	    //Vierasavain
            $table->integer('toimitusid')->nullable($value = true);	    //Vierasavain
            $table->string('alkupenimi')->nullable($value = true);	
            $table->string('suominimi')->nullable($value = true);	
            $table->string('painos')->nullable($value = true);	
            $table->string('kunto')->nullable($value = true);	
            $table->string('tyyppi')->nullable($value = true);	
            $table->string('status')->nullable($value = true);	
            $table->string('hinta')->nullable($value = true);	
            $table->string('suomentaja')->nullable($value = true);	
            $table->string('vuosi')->nullable($value = true);	
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
