<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'url', 
    ];


    /**
     * this model stores the metadata for the individual
     * files saved in storage
     */

    /**
     * Get the page that this file is associated with.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }

}
