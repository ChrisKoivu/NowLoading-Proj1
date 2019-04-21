<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    /**
     * This model is to track files and pages accessed by the user
     */

     /**
     * Get the user that this activity is associated with.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the page that this activity is associated with.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }

    /**
     * Get the file that this activity is associated with.
     */
    public function file()
    {
        return $this->belongsTo('App\File');
    }
}
