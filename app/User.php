<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
      /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     */

    use Notifiable;

    const ADMIN_ROLE = 'admin';
    const DEFAULT_ROLE = 'default';

    /** verify user is admin */
    public function isAdmin()    {        
       return $this->role === self::ADMIN_ROLE;    
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the activity associated with this User 
     */
    public function track()
    {
        return $this->hasMany('App\Track');
    }

}
