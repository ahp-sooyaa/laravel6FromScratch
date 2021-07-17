<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //wrong created
        // 'article_id' => factory(\App\Article::class),
        // 'tag_id' => factory(\App\Tag::class)
    ];
});
