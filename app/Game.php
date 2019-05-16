<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //

        protected $fillable = [ 
        'id',
    	'name',
    	'descripton',
    	'genre',
    	'developer',
    	'os',
    	'date'
    	// 'user_id'

    ];

    public function user(){ // dit kan je alles noemen
        return $this->belongsTo('App\User');
    }
    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function games(){
        return $this->belongsTo('App\Game');
    }
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}