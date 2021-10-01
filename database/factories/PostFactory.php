<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
<<<<<<< HEAD
    return [
        'user_id' => rand(1, 4),
=======
    return 
      [
        'user_id' => rand(1,4),
        'created_by' => rand(1,4),
        'modified_by' => rand(1,4),
>>>>>>> bc38b4a7d30c84acc44b9ab002ea797c62fa0dad
        'title' => $faker->sentence
      ];
});
