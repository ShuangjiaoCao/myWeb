<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumCommentsTable extends Migration {

	public function up()
	{
		  Schema::create('forum_comments',function(Blueprint $table)
         {
               $table -> increments('id');
               $table -> text('body');
               $table -> integer('category_id');
               $table -> integer('thread_id');
               $table -> integer('author_id');
               $table -> integer('group_id');
               $table -> timestamps();
               });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('forum_comments');
	}

}
