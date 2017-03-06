<?php

namespace App;


class Comments extends Model
{
    public function product()
    {
    	return $this->belongsTo(Products::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function replies()
    {
    	return $this->belongsTo(Replies::class);
    }
}
