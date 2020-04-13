<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('mobile')->unique()->nullable();
            $table->string('avatar_path')->nullable();
            $table->enum('gender',['MALE','FEMALE','NOT-SELECTED']);
            $table->tinyInteger('status');
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
            //
            $table->dropColumn('mobile');
            $table->dropColumn('avatar_path');
            $table->dropColumn('gender');
            $table->dropColumn('status');
        });
    }
}
