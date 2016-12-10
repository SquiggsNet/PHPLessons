<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = array('name', 'title', 'allPages','description', 'htmlSnippet', 'areas_id', 'pages_id','created_by' ,'updated_by' );

    public function pages()
    {
        return $this->belongsTo('App\Pages');
    }

    public function areas()
    {
        return $this->belongsTo('App\Areas');
    }
}
