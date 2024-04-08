<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Post
{
    public function post()
    {
        return $this->belongsTo(Post::class, 'id', 'id');
    }
}
