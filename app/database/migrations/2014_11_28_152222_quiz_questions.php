<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizQuestions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('quiz_questions', function ($newtable) {
            $newtable->increments('id');
            $newtable->string('Text');
            $newtable->string('quiz_id');
            $newtable->string('question_number');
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
        Schema::dropTable('quiz_questions');
    }
}