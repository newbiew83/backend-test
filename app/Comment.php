<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body','email'
    ];
    public function Post(){
        return $this->belongsTo(Post::class);
    }
}
