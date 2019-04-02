<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Survey;
use App\SurveyType;
use App\User;
use App\Choice;



class SurveysController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        if(!$user->survey_complete){
            $survey_id = $this->getSurveyId();           
            $survey = SurveyType::find($survey_id);
            // get all the questions with their associated
            // response options
            $questions = $survey->questions()->with('responses')->get();
            return view('survey.index', compact('questions'));    
        }else{
            return redirect()->route('home');
        }
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
        if(!Auth::user()->survey_complete){
            foreach( $input as $key=>$data ) {
            // strip out the token key from the response
                if($key !=="_token"){
                    $choices = new Choice(
                        [
                        'question_id' => $key,
                        'response_id' => $data,
                        ]
                    );     
                        
                    $response = $user->choices()->save($choices);
                }
            }
            $survey_type_id = $this->getSurveyId();  
            $survey = new Survey;
            $survey->survey_type_id = $survey_type_id;
            $this_survey = $user->survey()->save($survey);
            $survey_type = SurveyType::find($survey_type_id);
            $this_survey->surveyType()->attach($survey_type);

            // mark that survey is complete
            $user->survey_complete = 1;
            $user->save();
            return back()->with('success', 'Your entries have been saved.');  
        } else{
            return view('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(Auth::user()->permission('canReadReports')){
            $survey_type_id = $this->getSurveyId();
            $users = User::all();
            foreach ($users as $user){   
                $survey = DB::table('survey_types')
                ->join('surveys', 'surveys.survey_type_id', '=', 'survey_types.id')
                ->join('question_survey_type', 'question_survey_type.survey_type_id','=',
                'survey_types.id')
                ->join('questions','questions.id','=','question_survey_type.question_id')
                ->join('responses','responses.question_id','=','questions.id')
                ->join('choices', 'responses.id',"=", 'choices.response_id')
                ->join('users',"users.id","=",'choices.user_id')
                ->select('questions.survey_question','responses.survey_question_response')
                ->where('users.id', $user->id)->get()->unique();         
                $user_surveys[$user->name]['survey']=$survey;       
            }      
            return view('survey.show', compact('user_surveys','users'));
        } else {
            return view('home');
        }
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

        switch ($profession) {
            case 'CG':
                return 1; // Survey for Parent or Caregiver
            case 'AA':
                return 2; // Survey for Adult on Spectrum
            case 'Emp':
               return 3;  // Survey for Employer
            case 'Prof':
               return 4;  // Survey for Professional
            case 'Com':
               return 5;  // Survey for Community
        }
        return 1; //Default Parent survey
    }
}
