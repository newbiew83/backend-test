<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','body'
    ];
    //
    public function Comments(){
        return $this->hasMany(Comment::class)->orderBy('created_at','asc');
    }
}
