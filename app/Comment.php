<?php

namespace App;

class Comment extends Model
{
    //

    public function post() {
        return $this->belongsTo(Post::Class);
    }

    public function user() {
        return $this->belongsTo(User::Class);
    }
}
