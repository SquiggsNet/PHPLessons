<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{

    protected $fillable = array('description','created_by' ,'updated_by');
    //

    public function userPriv()
    {
        return $this->hasMany('App\UserPriv');
    }
}
