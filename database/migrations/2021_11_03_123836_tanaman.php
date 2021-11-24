<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tanaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanamen', function (Blueprint $table) {
            $table->id();
            
            // $table->string('slug')->unique();
            $table->string('nama');
            $table->string('spesies')->unique();
            $table->string('asal');
            $table->integer('limit1')->default(40);
            $table->integer('limit2')->default(30);
            $table->integer('limit3')->default(40);
            $table->integer('limit4')->default(20);
            $table->integer('limit5')->default(20);
            $table->integer('lolos')->default(70);

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
        Schema::dropIfExists('tanamans');
    }
}
