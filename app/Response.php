<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
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
