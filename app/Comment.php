<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Post;

class Comment extends Model
{
    public $fillable = ['userID', 'comment'];
    
    public function user() {
        return $this->belongsTo('App\User', 'userID', 'id');
        
    }
    
    public function post() {
        return $this->belongsTo('App\Post', 'postID', 'id');
        
    }
    
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    //protected $dateFormat = 'U';

}
