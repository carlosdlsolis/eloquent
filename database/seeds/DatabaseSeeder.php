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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
>>>>>>> bc38b4a7d30c84acc44b9ab002ea797c62fa0dad
        factory(App\User::class, 4)->create();
        factory(App\Post::class, 30)->create();
    }
}
