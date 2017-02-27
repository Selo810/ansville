<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class UserController extends Controller
{
    //LIST USER INFO
     public function index()
    {
        
     $users = User::where('id', '=', Auth::user()->id)->get();
    
     return view('/auth/user/manage', [
            'viewUser' =>$users
        ]);
    }
    
    
    // DELETE
    public function destroyUser(Request $request, User $user) {
        $user->delete($request->all());
        
        Session::flash('status', 'Your account was successfully deleted');
        return view('/');
    }
    
    
}
