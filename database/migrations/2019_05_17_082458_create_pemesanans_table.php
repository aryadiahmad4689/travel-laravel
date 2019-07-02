<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tiket')->unsigned()->index()->nullable();
            $table->integer('id_penerbangan')->unsigned()->index()->nullable();
            $table->string('nama_pelanggan');
            $table->string('alamat',120)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat_kota',90)->nullable();
            $table->string('alamat_prov',90)->nullable();
            $table->string('alamat_negara',100)->nullable();
            $table->string('kode_pos',8)->nullable();
            $table->string('status');
            $table->string('kode_booking');
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
        Schema::dropIfExists('pemesanans');
    }
}
