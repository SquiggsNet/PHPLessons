<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = array('name', 'title', 'page', 'allPages','description', 'contentArea', 'htmlSnippet', 'areas_id', 'pages_id');
}
