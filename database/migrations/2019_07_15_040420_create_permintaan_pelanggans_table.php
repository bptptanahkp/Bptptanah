<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermintaanPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_pelanggans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pemesanan_id')->unsigned();
            $table->foreign('pemesanan_id')->references('id')->on('pemesanan_users');
            $table->integer('id_ankimtan')->nullable();
            $table->integer('id_pupukkimia')->nullable();
            $table->integer('id_pupukorganik')->nullable();
            $table->integer('id_tanaman')->nullable();
            $table->integer('id_pengujianair')->nullable();
            $table->integer('harga')->nullable();
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
        Schema::dropIfExists('permintaan_pelanggans');
    }
}
