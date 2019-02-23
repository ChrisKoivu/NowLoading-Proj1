<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    
    protected $fillable = [
        'title','description','category', 'url',  'type', 'thumbnail' 
    ];


    /**
     * this model stores the metadata for the individual
     * files saved in storage
     */

    
}
