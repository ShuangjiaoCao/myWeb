<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
            Schema::create('users',function(Blueprint $table)
         {
               $table -> increments('id');
               $table -> string('username');
               $table -> string('password');
               $table -> enum('isAdmin',array(0,1))->default(0);  // check if the user admin is
               $table -> string('remember_token');
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
		Schema::drop('users');
	}

}
