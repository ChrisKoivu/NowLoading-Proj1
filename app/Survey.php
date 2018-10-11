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
     * Get the user that this Survey is associated with.
     */
    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get the page that this Survey is associated with.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}
