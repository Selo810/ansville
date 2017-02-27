<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Post extends Model
{
    public $fillable = ['userID', 'subject', 'body', 'likesCount'];
    
    public function user() {
        return $this->belongsTo('App\User', 'userID', 'id');
        
    }
    
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    //protected $dateFormat = 'U';

}
