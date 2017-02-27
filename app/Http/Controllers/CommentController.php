<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Notifications\newComment;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Comment;
use Session;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    
    
    // STORE COMMENT
    public function store(Request $request){
        
        $this->validate($request, [
            'comment' => 'required|max:2000',
            
            ]);
        $postID = Session::get('postID');
        
        $comments = new Comment;
       
        $comments->userID = Auth::user()->id;
        $comments->postID = $postID;
        $comments->comment = $request->input('comment');
        
        $comments->save();
        
        //NOTIFY POST OWNER
        $id = Session::get('userID');
        $user = User::find($id);
        $post = Post::find($postID);
    
        //$user->notify(new newComment($comment));
        Notification::send($user, new newComment($post));
        
        Session::flash('status', 'Comment was successfully added');
        return back();
        
    }
    
    
    // DELETE COMMENT
    public function destroyCom(Request $request, Comment $comment) {
        $comment->delete($request->all());
        
        Session::flash('status', 'Comment was successfully deleted');
        return back();
    }
    
    
}
