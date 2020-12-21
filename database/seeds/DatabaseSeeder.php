<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create()->each(function ($user){
            
            $posts = factory(App\Post::class, rand(0,30))->make(); 
            $user->posts()->saveMany($posts);
            
            $comments = factory(App\Comment::class, rand(0,30))->make(); 
            $user->comments()->saveMany($comments);
            
        });

 
    }
}
