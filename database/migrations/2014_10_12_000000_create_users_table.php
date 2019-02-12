<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
<<<<<<< HEAD
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('role')->default('default');
=======
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('default');            
>>>>>>> cb99281a5b6925240e2a45264c5ccfd2eaf741e5
            $table->boolean('survey_complete')->default(false);
            $table->text('auth_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
