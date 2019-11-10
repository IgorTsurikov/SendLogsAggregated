<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_log', function (Blueprint $table) {
            $table->increments('log_id');
            $table->integer('usr_id');
            $table->integer('num_id');
            $table->string('log_message');
            $table->boolean('log_success');
            $table->timestamp('log_created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_log');
    }
}
