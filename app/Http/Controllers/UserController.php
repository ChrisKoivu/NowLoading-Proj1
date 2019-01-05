<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource as UserResource;

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
    public function show($id)
    {
        // Get user
        $user = User::findOrFail($id);
        return new UserResource($user);
       

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($user = $request->isMethod('patch')){
            $user =  User::findOrFail($request->id);
            $user->role = $request->input('role');
            
            if($user->save()) {
                return new UserResource($user);
            }
        }
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        if($user->save()) {
            return new UserResource($user);
        }
    }



}
