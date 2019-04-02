<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            // FK to users table
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            // FK to users table
            $table->integer('survey_type_id')->unsigned();
            $table->foreign('survey_type_id')->references('id')->on('survey_types');
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
        Schema::dropIfExists('surveys');
    }
}
