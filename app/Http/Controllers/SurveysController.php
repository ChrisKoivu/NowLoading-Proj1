<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Survey;
use App\User;
use App\Choice;



class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // we are pulling only the first survey,
        // as this is the only one we have created at
        // this time.
        $survey_id = $this->getSurveyId();
        $survey = Survey::find($survey_id);
        // we are getting all the questions with their associated
        // response options
        $questions = $survey->questions()->with('responses')->get();
        return view('survey.index', compact('questions'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $input = $request->all();

        // save all entries at once
        // we dont know how many key/value pairs, 
        // so we are looping through them all
        foreach( $input as $key=>$data ) {
          // strip out the token key from the response
          if($key !=="_token"){
            $choice = new Choice(
                [
                'question_id' => $key,
                'response_id' => $data,
                ]
            );            
            $user->choices()->save($choice);
          }
        }
        // mark that survey is complete
        $user->survey_complete = 1;
        $user->save();
        return back()->with('success', 'Your entries have been saved.');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);


        // create a volunteers object with the fields we need
	    $responses = DB::table('users')
        ->join('choices', 'choices.user_id', '=', 'users.id')
        ->join('responses', 'responses.id', '=', 'choices.response_id')
        ->join('questions','choices.question_id','=','questions.id')
        ->select('choices.*', 'responses.*','questions.*')
        ->where('user_id', '=', $user_id)->get();
        return view('survey.show', compact('responses'));
        //print_r($responses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * get the survey id number for the profession of
     * the registered user, setting to survey 1 for now
     */
    private function getSurveyId(){
        $profession = Auth::user()->demographic->profession;

        // this is going to always return the first survey
        // until we add the additional surveys
        switch ($profession) {
            case 'CG':
                return 1;
            case 'AA':
                return 1; // should be 2
            case 'Emp':
               return 1;  // should be 3
            case 'Prof':
               return 1;  // should be 4
            case 'Com':
               return 1;  // should be 5
        }
        return 1;
    }
}
