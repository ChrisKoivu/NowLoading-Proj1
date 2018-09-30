<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    /**
     * Get the Answers associated with this Question
     */
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    /**
     * Get the Survey that this Question is associated with.
     */
    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }
}
