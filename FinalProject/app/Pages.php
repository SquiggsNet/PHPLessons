<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = array('name', 'alias', 'description');

//    public function users()
//    {
//        return $this->belongsTo('App\User');
//    }

    public function articles()
    {
        return $this->hasMany('App\Articles');
    }
}
