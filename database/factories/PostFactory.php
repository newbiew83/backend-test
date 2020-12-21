<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\User;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'email' => Str::random(10).$faker->domainName,
//     ];
// });



$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph,
        'userId' => \App\User::all()->random()->id,
        'created_at' => $faker->dateTimeBetween('-60 days', '+7 days'),
        'updated_at' => $faker->dateTimeBetween('-60 days', '+7 days')
    ];
});

$factory->define(Comment::class, function (Faker $faker) {
   
    return [
        'body' => $faker->paragraph,
        'name' => $faker->word,
        'post_id' => \App\Post::all()->random()->id,
        'email' => \App\User::all()->random()->email,
        'created_at' => $faker->dateTimeBetween('-60 days', '+7 days'),
        'updated_at' => $faker->dateTimeBetween('-60 days', '+7 days')
    ];
});

