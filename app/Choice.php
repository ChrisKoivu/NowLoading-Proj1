<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
     //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'response_id', 'question_id', 'user_id'
    ];

     /**
     * Get the response associated with this choice
     */
    public function responses()
    {
        return $this->belongsTo('App\Response');
    }

    /**
     * Get the question associated with this choice
     */
    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    /**
     * Get the user associated with this choice
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
