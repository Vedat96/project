<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $posts)
    {
        
            $posts = Post::all();


        
            return view('posts.index', ['posts'=>$posts]);
        // } 
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $posts = Post::all();
        
        return view('posts.create', ['posts'=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // if ($request->hasFile('file')) {

        //     $filename = $request->file->getClientOriginalName();

        //     $filesize = $request->file->getClientSize();

        //     $request->file->storeAs('public/upload',$filename);

        //     $file = new Post;

        //     $file->name = $filename;

        //     $file->size = $filesize;

        //     $file->save();
            
        //     return view("upload");
        //     // return 'yes';
        // }

        //
        if(Auth::check()){
            $post = Post::create([
                
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id,

                 

            ]);
            if($post){
                return redirect()->route('posts.show', ['post'=> $post->id])
                ->with('success' , 'Post created successfully');
            }
        }
        
            return back()->withInput()->with('errors', 'Error creating new post');
            // return back()->withInput()->wordwrap(str)ith('errors' , 'Error creating new post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::find($post->id );

        $comments = $post->comments;

        // $projects = 

        return view('posts.show', [ 'post' => $post, 'comments'=> $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $post = Post::find($post->id );
        // $projects = 

        return view('posts.edit', [ 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        // save data 
        if(Auth::check()){
            $postUpdate = Post::where('id', $post->id)
                                    ->update([
                                        
                                        'description' => $request->input('description'),
                                        
                                    ]);

            if($postUpdate){
                return redirect()->route('posts.show',['post'=>$post->id])->with('succes', 'Post updated succesfully');
            }
            //redirect
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $findPost = Post::find( $post->id);
        if($findPost->delete()){
            
            //redirect
            return redirect()->route('posts.index')
            ->with('success' , 'Post deleted successfully');
        }
        return back()->withInput()->with('errors' , 'Post could not be deleted');
        
    }
}
