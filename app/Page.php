<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

    /**
     * Get the posts associated with this Page 
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /**
     * Get the files associated with this Page 
     */
    public function files()
    {
        return $this->hasMany('App\File');
    }



}
