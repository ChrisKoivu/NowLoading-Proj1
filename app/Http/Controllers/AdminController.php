<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 

/* to access volunteer model */
use App\Volunteer;

class AdminController extends Controller
{
    /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * To designate a registered user as an admin, type the 
     * following on the command line:
     * 
     * $ php artisan tinker
     * use App\User;
     * User::where('email', 'admin@admin.com')->update(['role' => 'admin']);
     * replace 'admin@admin.com' with the email address of the Admin
     */
    
    public function admin()
    {
         $message = "Hello Admin!";
         return view('admin.admin', compact('message'));
    }
}
