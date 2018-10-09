<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');

            // FK to questions table. 
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');

            // FK to users table. 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            // FK to survey response table. 
            $table->integer('survey_response_id')->unsigned();
            $table->foreign('survey_response_id')->references('id')->on('survey_response');

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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('answers');
    }
}
