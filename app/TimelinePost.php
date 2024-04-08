<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimelinePost extends Post
{
    protected $fillable = [
        'id','timeline_type', 'event_date'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id', 'id');
    }
}
