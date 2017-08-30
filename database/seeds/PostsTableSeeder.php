<?php

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\User;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i <= 500; $i++) {
        	$post = new Post();
        	$post->url = $faker->url;
        	$post->title = $faker->catchPhrase;
        	$post->content = $faker->bs;
        	$post->created_by = User::all()->random()->id;
        	$post->save();
        }

    }
}
