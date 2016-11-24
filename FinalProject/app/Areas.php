<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $fillable = array('name', 'alias', 'displayOrder','description');

    public function articles()
    {
        return $this->hasMany('App\Articles');
    }
}
