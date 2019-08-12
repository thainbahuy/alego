<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use App\Model;
use App\Model\Web\Event;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'sub_menu_id' => 1,
        'name' => 'test event pre wedding name 123',
        'author' => $faker->name,
        'editor_designer' => $faker->name,
        'director_photographer' => $faker->name,
        'producer' => $faker->name,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quae, totam mollitia sequi vero eum facilis harum rerum nobis, cum ut quaerat reprehenderit numquam quos, minus perspiciatis perferendis. Enim, perferendis.',
        'image_cover' => 'website/images_upload/23.jpg',
        'video_link' => 'https://www.youtube.com/embed/adSOVwaLXlA',
        'type' => 1,
        'show_home' => 1,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,

    ];
});
