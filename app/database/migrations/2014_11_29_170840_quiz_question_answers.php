<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizQuestionAnswers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('quiz_question_answers', function ($newtable) {
            $newtable->increments('id');
            $newtable->string('Text');
            $newtable->string('quest_id');
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
        Schema::dropTable('quiz_question_answers');
    }
}