<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_dosens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user');
            $table->integer('hari');
            $table->integer('jam_mulai');
            $table->integer('durasi');
            $table->string('jenis');
            $table->string('label');
            $table->timestamp('lastUpdate');
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
        Schema::dropIfExists('jadwal_dosens');
    }
}
