<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    public static function boot()
    {
        $class = get_called_class();
        $class::observe(new Observer());

        parent::boot();
    }
}
