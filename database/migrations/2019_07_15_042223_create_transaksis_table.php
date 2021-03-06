<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('pemesanan_id')->unsigned();
            $table->foreign('pemesanan_id')
                    ->references('id')
                    ->on('pemesanan_users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('nama');
            $table->biginteger('totalHarga')->nullable();
            $table->integer('status')->default('0');
            $table->string('proses')->default('0');
            $table->string('keterangan')->nullable();
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
