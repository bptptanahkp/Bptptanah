<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisKimiaTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis_kimia_tanahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_uji');
            $table->string('metode')->nullable();
            $table->integer('tarif')->nullable();
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
        Schema::dropIfExists('analisis_kimia_tanahs');
    }
}
