<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireTimelineEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire_timeline_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questionnaire_timeline_id');
            $table->integer('order');
            $table->integer('event_type'); // 0 => question 1 => notification//
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
        Schema::dropIfExists('questionnaire_timeline_events');
    }
}
