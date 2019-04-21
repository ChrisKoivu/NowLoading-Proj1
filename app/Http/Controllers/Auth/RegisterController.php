<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Demographic;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            // fields for demographic table
            'city' => 'string',
            'street' => 'string',
            'street_num' => 'string',
            'zip' => 'required|string',
            'phone' => 'string',
            'state' => 'string',
            'country' => 'string',
            'profession' => 'string',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {           
        $role =($data['email']===config('app.admin_email')) ? 
          User::ADMIN_ROLE : User::DEFAULT_ROLE;

            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->role = $role;
            $user->save();
            $demographic = new Demographic;
            $demographic->street_num = $data['street_num'];
            $demographic->street = $data['street'];
            $demographic->city = $data['city'];
            $demographic->state = $data['state'];
            $demographic->zip = $data['zip'];
            $demographic->phone = $data['phone'];
            $demographic->country = $data['country'];
            $demographic->profession = $data['profession'];
            $user->demographic()->save($demographic);           
            return $user;
       
    }
}
