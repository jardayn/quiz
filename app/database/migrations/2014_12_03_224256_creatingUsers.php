<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function ($newtable) {
            $newtable->increments('id');
            $newtable->string('username');
            $newtable->string('password',60);
            $newtable->string('access_level');
            $newtable->string('email');
            $newtable->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropTable('users');
	}

}
