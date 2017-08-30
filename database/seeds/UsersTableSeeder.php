<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Justin';
        $user->email = 'justin@codeup.com';
        $user->password = Hash::make(env('USER_PASSWORD'));
        $user->save();

        $faker = Faker\Factory::create();

      	for($i = 0; $i <= 10; $i++) {
        	$user = new User();
        	$user->name = $faker->userName;
        	$user->password = Hash::make($faker->password);
        	$user->email = $faker->safeEmail;
        	$user->save();
        }

    }
}
