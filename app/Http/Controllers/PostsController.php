<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post; //from the post.php

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post = post::all($id); //view all entities in the Database.
        //$post = post::where('title','post two')->get(); // views post two in the Database.
        //$post = post::orderBy('title','desc')->take(1)->get(); //views the last entities to be posted in the Database.  
        //$post = post::orderBy('title','desc')->get();
        $post = post::orderBy('id','desc')->paginate();
        return view('posts.index')->with('posts',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
             'title' =>'required',
             'body' =>'required'
         ]);
        
         //Create Post
         $post = new post;
         $post-> title =$request->input('title');
         $post-> body =$request->input('body');
         $post-> user_id =auth()->user()->id;
         $post-> save();

         return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id); //The model is being Parsed through.
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id); //The model is being Parsed through.
        return view('posts.edit')->with('post',$post);
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
        $this->validate($request,[
            'title' =>'required',
            'body' =>'required'
        ]);
       
        //Create Post
        $post = post::find($id);
        $post-> title =$request->input('title');
        $post-> body =$request->input('body');
        $post-> user_id =auth()->user()->id;
        $post-> save();

        return redirect('/posts')->with('success','Post Updated');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= post::find($id);
        $post-> delete();

        return redirect('/posts')->with('success','Post Deleted');
    }
}
