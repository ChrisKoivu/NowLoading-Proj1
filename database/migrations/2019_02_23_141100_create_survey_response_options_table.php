<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyResponseOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_question_response_options', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('survey_response_option');
            // FK to survey questions table
            $table->integer('survey_question_id')->unsigned();
            $table->foreign('survey_question_id')->references('id')->on('survey_questions');
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
        Schema::dropIfExists('survey_response_options');
    }
}
