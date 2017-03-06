<?php

namespace App;

class Products extends Model
{
    public function comments()
    {
    	$this->hasMany(Comments::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
