<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{


    /**
     * Get the questions associated with this Survey
     */
    public function questions()
    {
        return $this->belongsToMany('App\Question');
    }

    /**
     * Get the users associated with this survey.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
