<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class,'userId','id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'email', 'email');
    }
}
