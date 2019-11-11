<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendLogAggregatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_log_aggregated', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('log_created');
            $table->integer('cnt_id');
            $table->integer('usr_id');
            $table->integer('sent_success');
            $table->integer('send_fail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_log_aggregated');
    }
}
