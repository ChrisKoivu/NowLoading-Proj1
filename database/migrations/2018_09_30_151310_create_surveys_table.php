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

            // FK to users table. 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

           
            // FK to pages table. 
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages');

            
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
        Schema::dropIfExists('surveys');
    }
}
