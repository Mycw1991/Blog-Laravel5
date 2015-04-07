<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	 Schema::create('posts', function($table){
            $table->increments('id');
                    //specifies name of a field that is auto increment
            $table->string('title', 200);
            $table->string('slug', 400);
            // slug is easier to read from url//
            $table->boolean('draft');
            //gives ability for each post to be a draft, so not appear on home page but able to edit//
            $table->text('body');
            $table->timestamps();
            //method generated created and updated in your table//
         });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
                // if you want to rool migration back//
	}

}
