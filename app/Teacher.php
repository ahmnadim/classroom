<?php

namespace App;

use App\Notifications\TeacherPasswordNotify;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function sendPasswordResetNotification($token)
{
    $this->notify(new TeacherPasswordNotify($token));
}

}
