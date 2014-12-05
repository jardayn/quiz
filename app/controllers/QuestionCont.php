<?php

class QuestionCont extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /questioncont
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /questioncont/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /questioncont
	 *
	 * @return Response
	 */
    public function store()
    {
        $run = new QuizQuestion;
        $run->text = (Input::get('question'));
        $run->quiz_id = (Input::get('quizid'));
        $run->question_number = (Input::get('question_number'));
        $run->save();

        return Redirect::back()->withMsg('Quiz Question Created');
    }

	/**
	 * Display the specified resource.
	 * GET /questioncont/{id}
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
	 * GET /questioncont/{id}/edit
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
	 * PUT /questioncont/{id}
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
	 * DELETE /questioncont/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}