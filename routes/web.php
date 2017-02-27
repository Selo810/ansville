<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::auth();

Route::get('/','HomeController@index');
Route::get('/post/todayPosts','HomeController@todayPosts');

//VIEW SEARCH RESUALT PAGE 
Route::get('/post/search','HomeController@search');

Route::get('/post/{post}','HomeController@postDetails');
Route::post('/post/details', 'CommentController@store');



///***********************************************AUTH USER************************************************///
///********************************************************************************************************///

Route::group(['middleware' => ['web']], function() {
 Route::auth();
   
///////////////////POST SECTION
Route::get('/auth/post/view', 'PostController@userPosts');


//CREATING POST
Route::get('auth/post/create', 'PostController@create');
Route::post('auth/post/create', 'PostController@store');


//view edit-form page
Route::get('auth/post/{post}', 'PostController@editPostForm');
Route::patch('auth/post/{post}', 'PostController@editPost');

//Delete Post
Route::delete('auth/post/{post}', 'PostController@destroyPost');


///////////////////COMMENT SECTION

//STORE COMMENT
Route::post('/post/details', 'CommentController@store');


//Delete Comment
Route::delete('/post/{comment}', 'CommentController@destroyCom');

///////////////////USER SECTION
Route::get('/auth/user/manage', 'UserController@index');
//Delete User
Route::delete('auth/user/{user}', 'UserController@destroyUser');


});


///***********************************************ADMIN************************************************///
///****************************************************************************************************///
Route::group(['middleware' => ['web']], function() {
    Route::auth();
    
    Route::get('/admin/index','AdminController@index');
    Route::get('/admin/post/view','AdminController@viewPosts');
    Route::get('/admin/user/view','AdminController@viewUsers');

});