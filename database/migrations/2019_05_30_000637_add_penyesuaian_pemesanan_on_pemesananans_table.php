<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPenyesuaianPemesananOnPemesananansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanans', function (Blueprint $table) {
             $table->foreign('id_tiket')->references('id')->on('tikets')->onDelete('cascade');
            $table->foreign('id_penerbangan')->references('id')->on('data_penerbangans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('pemesanans', function (Blueprint $table) {
            $table->drop('pemesanans');
        });
    }
}
