<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerPesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER `trigger_pesan` AFTER INSERT ON 
        `pemesanan_users` FOR EACH ROW BEGIN 
        UPDATE permintaan_pelanggans 
        SET nomorSPA = NEW.nomorSPA WHERE ntelp = NEW.ntelp; 
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `trigger_pesan`');
    }
}
