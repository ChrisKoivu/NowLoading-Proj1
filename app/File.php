<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //

    /**
     * this model stores the metadata for the individual
     * files saved in storage
     */

    /**
     * Get the post that this file is associated with.
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

}
