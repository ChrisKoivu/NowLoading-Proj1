<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{


   
    /**
     * Get the survey choice responses associated with this User 
     */
    public function questions()
    {
        return $this->hasMany('App\Question');
    }


    public function surveyType(){
        return $this->belongsToMany('App\SurveyType');
    }



    /**
     * Get the users associated with this survey.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
