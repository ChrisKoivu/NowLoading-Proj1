<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //

    /**
     * Get the page that this file is associated with.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }

}
