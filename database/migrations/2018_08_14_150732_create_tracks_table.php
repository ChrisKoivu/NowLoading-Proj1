<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // FK to users table. 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            // FK to pages table. 
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages');

            // FK to files table. 
            $table->integer('file_id')->unsigned();
            $table->foreign('file_id')->references('id')->on('files');

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
        Schema::dropIfExists('tracks');
    }
}