<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * this model is for an individual post or content
     * on a page
     */
    

     /**
     * Get the page that this post is associated with.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
    /**

* Get the files associated with this post.

*/

public function files()

{

return $this->hasMany('App\File');

}


    

}
