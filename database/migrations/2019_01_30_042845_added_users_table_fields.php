<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedUsersTableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('street');
            $table->string('street_num');
            $table->string('zip');
            $table->string('city');
            $table->string('phone');
            $table->string('state');
            $table->string('country');
            $table->string('profession');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('street');
            $table->dropColumn('street_num');
            $table->dropColumn('zip');
            $table->dropColumn('city');
            $table->dropColumn('phone');
            $table->dropColumn('state');
            $table->dropColumn('country');
            $table->dropColumn('profession');
        });
    }
}
