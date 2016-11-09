<?php

use Illuminate\Database\Seeder;
use App\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();
        for ($i=0; $i < 20; $i++) { 
        	Post::create([
        		'title'=> $faker->sentence,
        		'body'=> implode('',$faker->sentences(4))
        		]);
        }
    }
}
