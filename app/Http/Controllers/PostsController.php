<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\post; //from the post.php

class PostsController extends Controller
{   
   /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
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
             'body' =>'required',
             'cover_image' => 'image|nullable|max:1999'             
         ]);
        
         //Handle file upload
        if ($request->hasFile('cover_image')) {
            //Get file name with extention
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Just get file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Just get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore =$filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);            
        }
        else{
            $fileNameToStore ='noimage.jpg';
        }
       
        //Create Post
        $post = new post;
        $post-> title =$request->input('title'); 
        $post-> body =$request->input('body');
        $post-> user_id =auth()->user()->id;
        $post-> cover_image = $fileNameToStore;
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
        if(auth()->user()->id !==$post->user_id){ //Deny access to editing other users posts
            return redirect('/posts')->with('error','Unauthorised Access');
        }
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
            'body' =>'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        //Handle file upload
        if ($request->hasFile('cover_image')) {
            //Get file name with extention
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Just get file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Just get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore =$filename.'_'.time().'.'.$extension;
            //Upload image
            $path =$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);            
        }
              
        //Create Post
        $post = post::find($id);
        $post-> title =$request->input('title'); 
        $post-> body =$request->input('body');
        $post-> user_id =auth()->user()->id;
        if ($request->hasFile('cover_image')) {
            $post-> cover_image = $fileNameToStore;
        }
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
        if(auth()->user()->id !==$post->user_id){ //Deny access to delete other users posts
            return redirect('/posts')->with('error','Unauthorised Access');
        }
        if ($post->cover_image != 'noimage.jpg') {
            //Delete image
            Storage::delete('http://localhost/public/storage/cover_images/noimage.jpg'.$post->cover_image);
        }
        $post-> delete();
        return redirect('/posts')->with('success','Post Deleted');
    }
}
