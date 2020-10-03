<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function role(){ // dit kan je alles noemen
        return $this->belongsTo('App\Role');
    }
    public function users(){ // dit kan je alles noemen
        return $this->hasMany('App\User');
    }
    public function games(){ // dit kan je alles noemen
        return $this->hasMany('App\Game');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}
