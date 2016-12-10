<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StyleTemplate extends Model
{
    protected $fillable = array('name', 'description', 'content', 'activeState','created_by' ,'updated_by');
}
