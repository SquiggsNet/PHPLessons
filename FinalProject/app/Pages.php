<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = array('name', 'alias', 'description');

    public function articles()
    {
        return $this->hasMany('App\Articles');
    }
}
