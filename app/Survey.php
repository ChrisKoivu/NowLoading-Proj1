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
        return $this->hasMany('App\Question');
    }

     /**
     * Get the user that this Survey is associated with.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
