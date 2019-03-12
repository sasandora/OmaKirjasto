<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSarjaTeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarja_teos', function (Blueprint $table) {
            $table->integer('sarja_id');
            $table->integer('teos_id');
            $table->timestamps();
            $table->primary(['sarja_id','teos_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sarja_teos');
    }
}
