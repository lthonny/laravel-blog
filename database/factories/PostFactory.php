<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->realText(rand(10, 40));
    $shor_title = mb_strlen($title) > 30 ? mb_substr($title, 0, 30) . '...' : $title;
    $descr =  $faker->realText(rand(100, 500));

    return [
        'author_id' => rand(1, 4),
        'title' => $title,
        'short_title' => $shor_title,
        'img' => 'png',
        'descr' => $descr
    ];
});
