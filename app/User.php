<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
    

 
class User extends Authenticatable implements JWTSubject
{
      /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     */

    use Notifiable;

    const ADMIN_ROLE = 'admin';
    const DEFAULT_ROLE = 'default';
    const VOLUNTEER_ROLE = 'volunteer';
    
    const SURVEY_COMPLETE = false;

    /** verify user is admin */
    public function isAdmin()    {        
       return $this->role === self::ADMIN_ROLE;    
    }

     /** verify user is volunteer */
     public function isVolunteer()    {        
        return $this->role === self::VOLUNTEER_ROLE;    
     }
 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role','survey_complete', 'city', 'street', 'street_num',
        'zip', 'phone', 'state', 'country', 'profession',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Get the demographic associated with this User 
     */
    public function demographic()
    {
        return $this->hasOne('App\Demographic');
    }

    /**
     * Get the surveys for the user.
     */
    public function surveys()
    {
        return $this->belongsToMany('App\Survey');
    }
    /**
     * check if user role has permission to perform
     * the requested action. returns true if they
     * have the permission.
     * param $action - the permission to check.
     * either canCreateContent, canEditContent,
     * canChangeRole, or canReadReports. 
     */
    public function permission($action) {
        $permitted = array(
          'admin' => array(
            'role' => 'admin',
            'canCreateContent'=> true,
            'canEditContent'=> true,
            'canChangeRole'=> true,
            'canReadReports'=> true,
          ),
          'volunteer' => array(
            'role' => 'volunteer',
            'canCreateContent'=> false,
            'canEditContent'=> false,
            'canChangeRole'=> false,
            'canReadReports'=> true,
          ),
          'default' => array(
            'role' => 'default',
            'canCreateContent'=> false,
            'canEditContent'=> false,
            'canChangeRole'=> false,
            'canReadReports'=> false,
          ),
        );
      
        return $permitted[$this->role][$action];
      }
      


}
