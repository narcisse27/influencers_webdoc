<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conv_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conversation_id')->unsigned()->index();
            $table->integer('order');
            $table->text('content');
            $table->string('user_name');
            $table->float('timeToAppear');
            $table->boolean('tapping');
            $table->float('tappingAt')->nullable();
            $table->boolean('rendered')->default(false);
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
        Schema::dropIfExists('conv_messages');
    }
}
