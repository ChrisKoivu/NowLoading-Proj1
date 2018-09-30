<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * this model is for an individual post / content
     * on a page
     */
    

     /**
     * Get the page that this post is associated with.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}