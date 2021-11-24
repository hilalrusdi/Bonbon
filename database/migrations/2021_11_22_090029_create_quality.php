<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tanaman_id');
            $table->integer('bobot1');
            $table->integer('bobot2');
            $table->integer('bobot3');
            $table->integer('bobot4');
            $table->integer('bobot5');
            $table->integer('total');
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
        Schema::dropIfExists('qualities');
    }
}
