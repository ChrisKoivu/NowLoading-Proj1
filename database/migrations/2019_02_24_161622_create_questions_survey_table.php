<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_survey_type', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('survey_type_id')->unsigned()->nullable();
            $table->foreign('survey_type_id')->references('id')
                  ->on('survey_types')->onDelete('cascade');      
          
            $table->integer('question_id')->unsigned()->nullable();
            $table->foreign('question_id')->references('id')
               ->on('questions')->onDelete('cascade');

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
        Schema::dropIfExists('questions_survey_type');
    }
}
