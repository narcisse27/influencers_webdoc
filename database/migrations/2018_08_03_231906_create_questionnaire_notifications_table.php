<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->boolean('hide'); // hide or not
            $table->boolean('accept_or_not');
            $table->integer('action'); // -100 followers || + 50 followers
            $table->text('response_accept');
            $table->text('response_refuse');
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
        Schema::dropIfExists('questionnaire_notifications');
    }
}
