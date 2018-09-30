<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

     /**
     * Get the question that this answer is associated with.
     */
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
