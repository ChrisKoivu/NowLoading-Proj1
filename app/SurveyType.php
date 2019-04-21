<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyType extends Model
{
     /**
     * Get the questions associated with this survey type
     */
    public function questions()
    {
        return $this->belongsToMany('App\Question');
    }


    public function survey()
    {
        return $this->belongsToMany('App\Survey');
    }
}
