<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$avatars = [
    '/uploads/media/avatar5.jpg',
    '/uploads/media/avatar6.jpg',
    '/uploads/media/avatar7.jpg',
    '/uploads/media/avatar8.jpg',
    '/uploads/media/avatar9.jpg',
    '/uploads/media/avatar10.jpg',
    '/uploads/media/avatar11.jpg',
    '/uploads/media/avatar12.jpg',
];

$statuses = [
    'PUBLISHED',
    'DRAFT',
    'PENDING',
    'PUBLISHED',
    'PUBLISHED',
    'PUBLISHED',
];


$factory->define(\App\Models\Post::class, function (Faker $faker) use ($avatars , $statuses) {
    return [
        'user_id' => 1,
        'title' => $faker->name,
        'body' => $faker->text,
        'slug' => uniqid(),
        'seo_title' => $faker->name,
        'excerpt' => $faker->text,
        'avatar_path' => $faker->randomElement($avatars),
        'meta_description' => $faker->text,
        'meta_keywords' => $faker->text,
        'status' =>'PUBLISHED',
//        'status' =>$faker->randomElement($statuses),
    ];
});
