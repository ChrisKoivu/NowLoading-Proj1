<?php

namespace App\Http\Controllers;
use App\Link;
use Validator;
use App\Http\Resources\LinkResource as LinkResource;


use Illuminate\Http\Request;

class LinksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /* get posts for any auth user */
        $links = Link::all()->toArray();        
        return view('link.new', compact('links'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('link.create');

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
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'category' => 'required',

        ]);

        if ($v->fails()){            
            return back()->withErrors($v);
        }else{
            $link = Link::where('url', $request->input('url'))->first();
            if(!$link){
                $link = new Link;
                $link->title=$request->input('title');
                $link->description=$request->input('description');
                $link->url=$request->input('url');            
                $link->category=$request->input('category'); 
                $link->save();
                return back()->with('success', 'Your link has been added'); 
            }  else {
                return back()->with('duplicate', 'Your link has already been added'); 
            }        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
