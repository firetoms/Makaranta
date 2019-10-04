<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Clear Tables
        DB::table('users')->delete();
        DB::table('posts')->delete();

        // Seed Posts
        factory(App\Post::class, 8)->create();

        //create Users
        User::create([
            'name' => 'Hafeez Abdulazeez',
            'email' => 'hafeez@firetoms.com',
            'password' => bcrypt('password')
        ]);
    }
}
