<?php

namespace App;

class Replies extends Model
{
    public function comment()
    {
        return $this->belongsTo(Comments::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
