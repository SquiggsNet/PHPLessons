<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = array('name', 'title', 'page', 'allPages','description', 'contentArea', 'htmlSnippet', 'areas_id', 'pages_id');

    public function pages()
    {
        return $this->belongsTo('App\Pages');
    }

    public function areas()
    {
        return $this->belongsTo('App\Areas');
    }
}
