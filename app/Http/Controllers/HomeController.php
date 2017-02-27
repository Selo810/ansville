<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Comment;
use Session;
use Carbon\Carbon;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.userID')
            //->join('comments', 'posts.id', '=', 'comments.postID')
            ->select('users.*', 'posts.*');
           
            
        $postCount = DB::table('posts')->count();
        
         return view('welcome', [
                'viewRecentPosts' =>Post::orderBy('created_at', 'dec')->take(6)->get(),
                'postCount' => $postCount,
                'viewPosts' =>$users->orderBy('posts.created_at', 'dec')->distinct('posts.id')->paginate(8)
            ]);
    }
    
    
     public function todayPosts()
    {
        $users = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.userID')
            ->where('posts.created_at', '>=', Carbon::today())
            ->select('users.*', 'posts.*');
           
            
    $postCount = DB::table('posts')->where('posts.created_at', '>=', Carbon::today())->count();
    
   
     return view('post.todayPosts', [
            'viewRecentPosts' =>Post::orderBy('created_at', 'dec')->take(5)->get(),
            'postCount' => $postCount,
            'viewPosts' =>$users->orderBy('posts.created_at', 'dec')->distinct('posts.id')->paginate(8)
        ]);
    }
    
    
     // get details page
    public function postDetails(Post $post)
    {
        
         Session::set('post_id', $post->id );
         
         $comments = DB::table('users' )
          
        ->join('comments', function ($join) {
             
            $join->on('users.id', '=', 'comments.userID')
                 ->where('comments.postID', '=', Session::get('post_id'));
        })->orderBy('comments.created_at', 'dec')->distinct('comments.id')->paginate(10);
          
            
        $user = User::where('id', '=', $post->userID)->get();
        $commentCount = Comment::where('postID', '=', $post->id)->count();
    
        return view('post.details', [
            'viewRecentPosts' =>Post::orderBy('created_at', 'dec')->take(5)->get(),
            'commentCount' => $commentCount,
            'comments' =>$comments,
            'viewUser' =>$user,
            'post' =>compact('post')
            
        ]);
        
       //return view('schools.details', compact('school'));
    }
    
    
     public function search(Request $request)
    {
 
        
        $search = $request->input('search');
        
         $post = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.userID')
            ->where('posts.subject', 'LIKE', '%' .$search. '%');
           
        $postCount = $post->count();
        
        return view('post.search', [
            'viewRecentPosts' =>Post::orderBy('created_at', 'dec')->take(6)->get(),
            'postCount' => $postCount,
            'viewPosts' =>$post->orderBy('posts.created_at', 'dec')->distinct('id')->paginate(15)
        ]);
        
    }
    
}
