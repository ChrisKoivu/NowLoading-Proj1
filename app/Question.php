<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Survey;

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
     * Get the responses associated with this Question
     */
    public function responses()
    {
        return $this->hasMany('App\Response');
    }

    /**
     * Get the Surveys that this Question is associated with.
     */
      
    public function surveys()
    {
        return $this->belongsToMany('App\Survey');
    }


    // this is the answer that the respondent chose
    public function choices()
    {
        return $this->hasOne('App\Choice');
    }

}
