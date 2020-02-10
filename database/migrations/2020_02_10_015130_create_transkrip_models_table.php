<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranskripModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transkrip_models', function (Blueprint $table) {
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
        Schema::dropIfExists('transkrip_models');
    }
}
