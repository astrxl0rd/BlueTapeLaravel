<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranskripsTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transkrips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('requestByEmail');
            $table->timestamp('requestDateTime');
            $table->string('requestType');
            $table->string('requestUsage');
            $table->string('answer');
            $table->string('answeredByEmail');
            $table->timestamp('answeredDateTime');
            $table->string('answeredMessage');
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
        Schema::dropIfExists('transkrips');
    }
}
