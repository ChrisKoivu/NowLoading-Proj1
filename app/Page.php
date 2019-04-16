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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','slug',
    ];



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
