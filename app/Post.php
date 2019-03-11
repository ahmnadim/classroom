<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function courses()
    {
    	return $this->belongsToMany('App\Course')->withTimestamps();
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function teacher()
    {
    	return $this->belongsTo('App\Teacher');
    }
}
