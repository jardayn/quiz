<?php

class deleteCont extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($target,$id)
	{
        if(Session::get('type')=='Admin')
        {
            if($target == 'quiz_questions' || $target == 'quizzes' || $target == 'quiz_question_answers' || $target == 'quiz_results'){
                DB::table("$target")
                    ->where('id', '=', $id)
                    ->delete();
                return Redirect::back()->withMsg("Record #$id was deleted");
            }
            else
            {
                return Redirect::back()->withMsg('Sneaky sneaky');
            }
        }
        else
        {
            return Redirect::to('/');
        }

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
