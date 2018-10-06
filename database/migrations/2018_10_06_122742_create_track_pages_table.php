<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

           // FK to users table. 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            
           // FK to pages table. 
             $table->integer('page_id')->unsigned();
             $table->foreign('page_id')->references('id')->on('pages');
            
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
        Schema::dropIfExists('track_pages');
    }
}
