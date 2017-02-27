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

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('admin');
    }
    
    //
    
    public function index()
    {
        $users = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.userID')
            //->join('comments', 'posts.id', '=', 'comments.postID')
            ->select('users.*', 'posts.*');
           
            
    $postCount = DB::table('posts')->count();
    $commentCount = DB::table('comments')->count();
    $userCount = DB::table('users')->count();
    $todayPostCount = Post::where('created_at', '>=', Carbon::today())->count();
    $todayComCount = Comment::where('created_at', '>=', Carbon::today())->count();
    $todayUserCount = User::where('created_at', '>=', Carbon::today())->count();
    
     return view('/admin/index', [
            'todayComCount' => $todayComCount,
            'todayUserCount' => $todayUserCount,
            'todayPostCount'=> $todayPostCount,
            'commentCount' => $commentCount,
            'userCount' => $userCount,
            'postCount' => $postCount,
            'viewPosts' =>$users->orderBy('posts.created_at', 'dec')->distinct('posts.id')->paginate(10)
        ]);
    }
    
    //List all the posts
     public function viewPosts()
    {
        $users = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.userID')
            //->join('comments', 'posts.id', '=', 'comments.postID')
            ->select('users.*', 'posts.*');
           
            
    $postCount = DB::table('posts')->count();
    
     return view('/admin/post/view', [
            'postCount' => $postCount,
            'viewPosts' =>$users->orderBy('posts.created_at', 'dec')->distinct('posts.id')->paginate(20)
        ]);
    }
    
     //List all the users
     public function viewUsers()
    {
            
     $userCount = DB::table('users')->count();
     $users = DB::table('users')->orderBy('name', 'dec')->distinct('posts.id')->paginate(20);
    
     return view('/admin/user/view', [
            'userCount' => $userCount,
            'viewUsers' =>$users
        ]);
    }
    
   
    
}
