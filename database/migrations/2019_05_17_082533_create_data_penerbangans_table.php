<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPenerbangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penerbangans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned()->index()->nullable();
            $table->integer('id_tiket')->unsigned()->index()->nullable();
            // $table->integer('id_pemesanan')->unsigned()->index()->nullable();
            $table->string('kota_asal');
            $table->string('kota_tujuan');
            $table->date('tanggal_terbang');
            $table->date('tanggal_tiba');
            $table->time('jam_berangkat');
            $table->time('jam_tiba');
            $table->string('terminal');
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
        Schema::dropIfExists('data_penerbangans');
    }
}
