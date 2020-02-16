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
<<<<<<< HEAD
            $table->string('answerdByEmail');
            $table->timestamp('answerdDateTime');
            $table->string('answerdMessage');
=======
            $table->timestamp('answeredDateTime');
            $table->string('answeredMessage');
>>>>>>> 27833d413e676c0488d14510b9f9e801c972f54c
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
