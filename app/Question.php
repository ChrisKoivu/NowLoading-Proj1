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
    public function response()
    {
        return $this->hasOne('App\Response');
    }

    /**
     * Get the Surveys that this Question is associated with.
     */
      
    public function surveys()
    {
        return $this->belongsToMany('App\Question');
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

}
