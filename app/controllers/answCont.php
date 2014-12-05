<?php

class AnswCont extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /answcont
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /answcont/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /answcont
	 *
	 * @return Response
	 */
	public function store()
	{

        $run = new QuizAnswer;
        $run->Text = (Input::get('text'));
        $run->quest_id = (Input::get('questid'));
        $run->result_value = (Input::get('resultnum'));
        $run->save();
        return Redirect::back()->withMsg('Answer Created');
	}

	/**
	 * Display the specified resource.
	 * GET /answcont/{id}
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
	 * GET /answcont/{id}/edit
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
	 * PUT /answcont/{id}
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
	 * DELETE /answcont/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}