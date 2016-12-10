<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->boolean('allPages');
            $table->text('description');
            $table->string('htmlSnippet');
            $table->timestamps();
            $table->integer('areas_id')->unsigned();
            $table->integer('pages_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();

            //foreign key constraints
            $table->foreign('pages_id')->references('id')->on('pages');
            $table->foreign('areas_id')->references('id')->on('areas');
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
        Schema::drop('articles');
    }
}
