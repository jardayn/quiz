<?php

class ResultsCont extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /resultscont
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /resultscont/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /resultscont
	 *
	 * @return Response
	 */
	public function store()
	{
        $validation = Validator::make(Input::all(),
            array(

                'title' => 'required',
                'imgurl' => 'required',
                'text' => 'required',
                'result_number'=>'required',

            ));
        if ($validation->fails())
        {
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        $run = new Result;
        $run->title = (Input::get('title'));
        $run->Text = (Input::get('text'));
        $run->imgurl = (Input::get('imgurl'));
        $run->quiz_id = (Input::get('quizid'));
        $run->result_number = (Input::get('result_number'));
        $run->save();
        return Redirect::back()->withMsg('Quiz result added');
	}

	/**
	 * Display the specified resource.
	 * GET /resultscont/{id}
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
	 * GET /resultscont/{id}/edit
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
	 * PUT /resultscont/{id}
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
	 * DELETE /resultscont/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}