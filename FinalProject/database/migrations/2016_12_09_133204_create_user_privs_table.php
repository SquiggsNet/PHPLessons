<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPrivsTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_privs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->integer('privilege_id')->unsigned();

            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();

            //foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('privilege_id')->references('id')->on('privileges');

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_privs');
    }
}
