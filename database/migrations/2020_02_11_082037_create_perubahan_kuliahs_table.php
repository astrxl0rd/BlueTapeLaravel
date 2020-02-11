<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerubahanKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perubahan_kuliahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('requestByEmail');
            $table->timestamp('requestDateTime');
            $table->string('mataLKuliahName');
            $table->string('mataLKuliahCode');
            $table->string('class');
            $table->string('changeType');
            $table->timestamp('fromDateTime');
            $table->string('fromRoom');
            $table->string('to');
            $table->string('remarks');
            $table->string('answer');
            $table->string('answerdByEmail');
            $table->timestamp('answerdDateTime');
            $table->string('answerdMessage');
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
        Schema::dropIfExists('perubahan_kuliahs');
    }
}
