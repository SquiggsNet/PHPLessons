<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPriv extends Model
{
    protected $fillable = array('user_id', 'privilege_id', 'created_by' ,'updated_by');
}
