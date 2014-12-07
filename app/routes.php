<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//controllers

Route::resource('quiz', 'QuizCont');
Route::resource('quest', 'QuestionCont');
Route::resource('result', 'ResultsCont');
Route::resource('answer', 'answCont');
Route::resource('quizansw', 'trackingCont');
Route::resource('sessions', 'SessionCont');
Route::resource('delete', 'deleteCont');
//front
Route::get('/flush', function()
{
    Session::flush();
    return 'session flushed';
});

Route::get('/', function()
{
    $quizzes = DB::table('quizzes')->get(['id', 'name', 'imgurl']);
	return View::make('index',['quizzes'=>$quizzes]);
});
Route::get('/index', function()
{
    $quizzes = DB::table('quizzes')->get(['id', 'name', 'imgurl']);
    return View::make('index',['quizzes'=>$quizzes]);
});
Route::get('quizgo/{quizid}/{questid}', function($quizid,$questid)
{
    $questnumb = DB::table('quiz_questions')->where('quiz_id', '=',$quizid)->count();
    $nextquestid=$questid+1;
    if($questid>$questnumb){

        return Redirect::to("completed/$quizid");
        }
    $quiztitle = DB::table('quizzes')->where('id', '=',$quizid)->first();

    $question = DB::table('quiz_questions')->where('quiz_id', '=',$quizid)->where('question_number', '=',$questid)->first();
    if(!isset($question)){
        return 'Apparently somehow, you missed my first filter. So listen here: there are questions with identical question_number and quiz_id values in the database. Fix it, and this will work OR this is a unfinished test.';
    }
    $answers = DB::table('quiz_question_answers')->where('quest_id','=',$question->id)->get(['text','result_value','id']);
    return View::make('question',['question'=>$question,'answers'=>$answers,'questnumb'=>$questnumb,'questid'=>$questid,'quiztitle'=>$quiztitle,'nextquestid'=>$nextquestid,'quizid'=>$quizid]);
});
Route::get('/index', function()
{
    $quizzes = DB::table('quizzes')->get(['id', 'name', 'imgurl']);
    return View::make('index',['quizzes'=>$quizzes]);
});
Route::get('completed/{quizid}', function($quizid)
{

    $array = Session::get("results.$quizid");

    if($array==NULL){
        $completed='0';
        $result='1';
    }
    else
    {
        $completed='1';
        $count = array_count_values($array);
        arsort($count);
        $keys = array_keys($count);
        $result_id = $keys[0];
        $result= DB::table('quiz_results')->where('quiz_id','=',$quizid)->where('result_number','=',$result_id)->first();
    }



    if($quizinfo = DB::table('quizzes')->where('id','=',$quizid)->first())
    {
        $quizzes = DB::table('quizzes')->get(['id', 'name', 'imgurl']);
        return View::make('result',['quizzes'=>$quizzes,'result'=>$result,'quizinfo'=>$quizinfo,'completed'=>$completed,'quizid'=>$quizid]);
    }else
    {

}
    $quizzes = DB::table('quizzes')->get(['id', 'name', 'imgurl']);
    return View::make('result',['quizzes'=>$quizzes,'result'=>$result,'quizinfo'=>$quizinfo,'completed'=>$completed,'quizid'=>$quizid]);
});

//admin routes
Route::get('/login', function () {
    return View::make('login');
});
Route::get('annihilate/{target}/{id}', array('as' => 'delete_stuff', 'uses' => 'Deletecont@edit'));
Route::group(array('before' => 'userauth'), function() {


    Route::get('/admin', function () {
        $quizzes = DB::table('quizzes')->get(['id', 'name', 'imgurl']);
        return View::make('admin', ['quizzes' => $quizzes]);
    });
    Route::get('/admin/quiz/{id}', function ($id) {
        $quizid = $id;
        $questions = DB::table('quiz_questions')->where('quiz_id', '=', $id)->get(['id', 'Text', 'question_number']);
        $results = DB::table('quiz_results')->where('quiz_id', '=', $id)->get(['id', 'Text', 'imgurl', 'title']);
        return View::make('editquiz', ['quizid' => $quizid, 'questions' => $questions, 'results' => $results]);
    });
    Route::get('/admin/quest/{id}', function ($id) {
        $questid = $id;
        $quizid = DB::table('quiz_questions')->where('id', '=', $id)->first();

        $answers = DB::table('quiz_question_answers')->where('quest_id', '=', $id)->get(['id', 'Text','result_value']);
        return View::make('newanswer', ['answers' => $answers, 'questid' => $questid, 'quizid' => $quizid]);
    });

    Route::get('/dump', function () {

    });

});