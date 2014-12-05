<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizResults extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('quiz_results', function ($newtable) {
            $newtable->increments('id');
            $newtable->string('Text');
            $newtable->string('quiz_id');
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
        Schema::dropTable('quiz_results');
	}

}
