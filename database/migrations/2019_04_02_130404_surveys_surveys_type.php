<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SurveysSurveysType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_survey_type', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('survey_type_id')->unsigned()->nullable();
            $table->foreign('survey_type_id')->references('id')
                  ->on('survey_types')->onDelete('cascade');      
          
            $table->integer('survey_id')->unsigned()->nullable();
            $table->foreign('survey_id')->references('id')
               ->on('surveys')->onDelete('cascade');

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
        //
    }
}
