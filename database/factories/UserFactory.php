<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Blog;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

// protected $fillable = ['body','post_type','title','blog_image','user_id','slug'];

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'body'   => $faker->paragraph(4),
        'post_type' => $faker->unique()->safeEmail,
        'title'     => $faker->sentence(5),
        'blog_image' => $faker->image('public/images',640,480, null, false),
        'user_id' => 1,
        'slug' => $faker->randomFloat(2, 0, 10000)
    ];
});
