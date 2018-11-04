<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
    
/**
 * this class is for the api calls for json
 * object. using this resource / resource collection
 * for filtering the users in the admin panel.
 */

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

   
       /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     *
     * @return UserResource
     */
    public function show(User $user)
    {
        
    }

}
