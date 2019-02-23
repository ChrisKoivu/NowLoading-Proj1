<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Validator;
use App\Mail\ContactCreated;
use Illuminate\Support\Facades\Mail;
 

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate input
        $v = Validator::make($request->all(), [     
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'comment' => 'required',
        ]);

        if ($v->fails()){            
            return back()->withErrors($v);
        }else{
            $contact = new Contact;
            $contact->name=$request->input('name');
            $contact->email=$request->input('email');
            $contact->comment=$request->input('comment');            
            $contact->save();
            // mail the admin the confirmation
            Mail::to("youremail@yourhoast.whatever")->send(new ContactCreated($contact));
            return back()->with('success', 'Your message was sent successfully!');
        }
    }
}
