<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_surveys', function (Blueprint $table) {
            $table->increments('id');
            
            // FK to questions table. 
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');

            // FK to surveys table. 
            $table->integer('survey_id')->unsigned();
            $table->foreign('survey_id')->references('id')->on('surveys');

            
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
        Schema::dropIfExists('questions_surveys');
    }
}
