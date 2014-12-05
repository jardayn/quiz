<?php

class trackingCont extends \BaseController {

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
     * highly sexy input, but I suggest using standard vars.
	 * Session::put('test.'.Input::get('answres'),Input::get('answres'));
	 * @return Response
	 */
	public function store()
    {

        $quizid = str_replace(['+', '-'], '', filter_var(Input::get('quizid'), FILTER_SANITIZE_NUMBER_INT));;
        $questid = Input::get('questid')+1;
        $questid = str_replace(['+', '-'], '', filter_var($questid, FILTER_SANITIZE_NUMBER_INT));
        $answerresult = str_replace(['+', '-'], '', filter_var(Input::get('answerresult'), FILTER_SANITIZE_NUMBER_INT));;
        Session::put("results.$quizid.$questid","$answerresult");
        return Redirect::to("quizgo/$quizid/$questid");
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
	public function edit($id)
	{
		//
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
