<?php

class QuizCont extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /quizcont
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /quizcont/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /quizcont
	 *
	 * @return Response
	 */
    public function store()
    {
        $validation = Validator::make(Input::all(),
            array(

                'name' => 'required',
                'imgurl' => 'required',
            ));
        if ($validation->fails())
        {
            return Redirect::back()->withInput()->withErrors($validation->messages());
        }

        $run = new Quiz;
        $run->name = (Input::get('name'));
        $run->imgurl = (Input::get('imgurl'));
        $run->live = 'no';
        $run->save();
        return Redirect::back()->withMsg('Quiz Created');
    }

	/**
	 * Display the specified resource.
	 * GET /quizcont/{id}
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
	 * GET /quizcont/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        if(Session::get('type')=='Admin')
        {
            $quiz = DB::table('quizzes')->where('id','=',$id)->first();
            
        if($quiz->live =='no')
            {
                DB::table("quizzes")
                    ->where('id', '=', $id)
                    ->update(array('live' => 'yes'));
                return Redirect::back()->withMsg("Done");
            }
            else
            {
                DB::table("quizzes")
                    ->where('id', '=', $id)
                    ->update(array('live' => 'no'));
                return Redirect::back()->withMsg("Done");
            }
        }
        else
        {
            return Redirect::to('/');
        }
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /quizcont/{id}
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
	 * DELETE /quizcont/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}