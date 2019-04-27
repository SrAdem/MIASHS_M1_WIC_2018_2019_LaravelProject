<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;
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
$factory->define(App\Comments::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    $posts = App\Post::pluck('id')->toArray();
    return [
        'post_id' => $faker->randomElement($posts),
        'comment_email' => $faker->unique()->safeEmail,
        'comment_date' => now(),
        'comment_content' => $faker->paragraph(),
        'comment_name' => $faker->unique()->word(),
    ];
});
?>