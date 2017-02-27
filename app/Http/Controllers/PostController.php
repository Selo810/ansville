<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\User;
use App\Post;
use App\Comment;
use Session;
use Carbon\Carbon;

class PostController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Get create page
    public function create(){
        return view('auth.post.create');
    }
    
     // post
    public function store(Request $request){
        
        $this->validate($request, [
            'subject' => 'required|max:255',
            'body' => 'required|max:2000'
            
            ]);
        
        
        $posts = new Post;
        
        $posts->userID = Auth::user()->id;
        $posts->subject = $request->input('subject');
        $posts->body = $request->input('body');
        
        $posts->save();
        Session::flash('status', 'Post was successfully added');
        return redirect('/auth/post/view');
        
    }
    
    //UPDATE
    //get
    public function editPostForm(Post $post) {
        
        return view('auth.post.edit', compact('post'));
    }
    
    //patch
    public function editPost(Request $request, Post $post) {
        $post->update($request->all());
        
        Session::flash('status', 'Post was successfully edited');
        return redirect('/auth/post/view');
    }
    
    // DELETE
    public function destroyPost(Request $request, Post $post) {
        $post->delete($request->all());
        
        Session::flash('status', 'Post was successfully deleted');
        return back();
    }
    
    
     //get all posts for a logged in user
     public function userPosts() {
        $postCount = Post::where('userID', '=', Auth::user()->id)->count();
        
        return view('auth.post.view', [
            'userPostCount' => $postCount,
            'viewPosts' =>Post::where('userID', '=', Auth::user()->id)->orderBy('created_at', 'dec')->paginate(10)
        ]);
        
        
    }
}
