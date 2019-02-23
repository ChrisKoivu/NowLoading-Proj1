<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_question_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('survey_question_response');

             // FK to volunteers table
            $table->integer('question_response_option_id')->unsigned();
            $table->foreign('question_response_option_id')->references('id')->on('survey_question_response_options');
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
        Schema::dropIfExists('survey_response');
    }
}
