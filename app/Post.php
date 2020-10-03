<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

        protected $fillable = [ 
        'id',
    	'description',
    	'user_id',

    ];

    // public function user(){ // dit kan je alles noemen
    //     return $this->belongsTo('App\User');
    // }
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}