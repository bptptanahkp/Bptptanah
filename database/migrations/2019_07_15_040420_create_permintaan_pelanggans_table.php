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
            $table->unsignedBigInteger('pemesanan_id')->unsigned();
            $table->foreign('pemesanan_id')
                    ->references('id')
                    ->on('pemesanan_users')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('id_ankimtan')->nullable();
            $table->foreign('id_ankimtan')
                    ->references('id')
                    ->on('analisis_kimia_tanahs');
            $table->unsignedBigInteger('id_pupukkimia')->nullable();
            $table->foreign('id_pupukkimia')
                    ->references('id')
                    ->on('pupukkimias');
            $table->unsignedBigInteger('id_pupukorganik')->nullable();
            $table->foreign('id_pupukorganik')
                    ->references('id')
                    ->on('pupuk_organik__kompos__cairs');
            $table->unsignedBigInteger('id_tanaman')->nullable();
            $table->foreign('id_tanaman')
                    ->references('id')
                    ->on('tanamen');
            $table->unsignedBigInteger('id_pengujianair')->nullable();
            $table->foreign('id_pengujianair')
                    ->references('id')
                    ->on('pengujian_airs');
            $table->unsignedBigInteger('harga');
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
