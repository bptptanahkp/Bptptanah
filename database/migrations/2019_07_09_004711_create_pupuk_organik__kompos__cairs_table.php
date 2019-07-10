<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePupukOrganikKomposCairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pupuk_organik__kompos__cairs', function (Blueprint $table) {
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
        Schema::dropIfExists('pupuk_organik__kompos__cairs');
    }
}
