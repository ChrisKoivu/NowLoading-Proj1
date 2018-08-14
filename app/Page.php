<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     *  This model is for creating dynamic pages which
     *  contain individual posts, content, or links to
     *  stored files 
     */

    /**
     * Get the posts associated with this Page 
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

  


}
