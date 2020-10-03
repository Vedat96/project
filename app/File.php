<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //

        protected $fillable = [ 
        'id',
    	'name',
    	'size',
    ];

    // public function user(){ // dit kan je alles noemen
    //     return $this->belongsTo('App\User');
    // }

    public function file(){
        return $this->belongsTo('App\File');
    }


}