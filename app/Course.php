<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\Post')->withTimestamps();
    }

    public function teacher()
    {
    	return $this->belongsTo('App\Teacher');
    }

    public function students()
    {
    	return $this->belongsToMany('App\Student')->withTimestamps();
    }
}
