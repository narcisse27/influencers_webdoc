<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->string('destinataire_name');
            $table->string('destinataire_picture');
            $table->string('destinataire_mini_picture');
            $table->string('destinataire_info');
            $table->float('destinataire_followers');
            $table->string('destinataire_facebook_link');
            $table->string('destinataire_instagram_link');
            $table->integer('destinataire_publications');
            $table->string('expediteur_name');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('conversations');
    }
}
