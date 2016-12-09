<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    public function users()
//    {
//        return $this->belongsTo('App\Users');
//    }
//
//    public function users()
//    {
//        return $this->hasMany('App\Users');
//    }

    public function userPriv()
    {
        return $this->hasMany('App\UserPriv');
    }

    public function pages()
    {
        return $this->hasMany('App\Pages');
    }
}
