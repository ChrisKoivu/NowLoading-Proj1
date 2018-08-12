<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

     /**
     * Get the page that this post is associated with.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }

}
