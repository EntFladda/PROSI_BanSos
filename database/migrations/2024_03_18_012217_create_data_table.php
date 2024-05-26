<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id_data');
            $table->unsignedInteger('id_login');
            $table->foreign('id_login')->references('id_pengguna')->on('pengguna');
            $table->string('nama');
            $table->string('no_KK', 50);
            $table->string('no_tlp', 20);
            $table->integer('penghasilan');
            $table->string('Pekerjaan', 150);
            $table->text('kondisi_rumah');
            $table->integer('jumlah_tanggungan');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data');
    }
}