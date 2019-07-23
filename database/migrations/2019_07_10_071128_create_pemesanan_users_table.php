<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('instansi');
            $table->string('alamat');
            $table->double('ntelp');
            $table->string('contohygdianalisis');
            $table->string('unsurygdianalisis');
            $table->string('jml_contoh');
            $table->string('bentuk');
            $table->string('asal_contoh');
            $table->string('merk')->nullable();
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
        Schema::dropIfExists('pemesanan_users');
    }
}
