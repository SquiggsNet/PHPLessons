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
            $table->integer('page');
            $table->boolean('allPages');
            $table->text('description');
            $table->text('contentArea');
            $table->string('htmlSnippet');
            $table->timestamps();
            $table->integer('area_id')->unsigned();
            $table->integer('page_id')->unsigned();

            //foreign key constraints
            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('area_id')->references('id')->on('areas');
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
