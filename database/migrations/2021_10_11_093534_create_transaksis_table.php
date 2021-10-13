<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('supplier_id');
            // $table->foreignId('tanaman_id');
            // $table->foreignId('user_id');
            $table->string('nama');
            $table->date('tgl');
            $table->string('no_hp');
            $table->string('status');
            $table->string('ket');
            $table->string('total');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('transaksis');
    }
}
