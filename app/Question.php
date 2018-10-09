<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
    ];


    /**
     * Get the Answers associated with this Question
     */
    public function responses()
    {
        return $this->hasMany('App\Response');
    }

    /**
     * Get the Survey that this Question is associated with.
     */
    public function survey()
    {
        return $this->belongsToMany('App\Survey');
    }
}
