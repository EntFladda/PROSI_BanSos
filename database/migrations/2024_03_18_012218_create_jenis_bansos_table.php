<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisBansosTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_bansos', function (Blueprint $table) {
            $table->increments('id_jb');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id_pengguna')->on('pengguna');
            $table->integer('jumlah_jb');
            $table->string('deskripsi', 1000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_bansos');
    }
}