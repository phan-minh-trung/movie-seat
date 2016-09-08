<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data.
        User::truncate();

        //faker
        $faker = Faker\Factory::create('en_US');

        //insert
        for ($i = 0; $i < 25; $i++) {
            $user = User::create();

            $user->name = $faker->userName();
            $user->email = $faker->unique()->email();
            $user->password = Hash::make($user->email);

            $user->save();

        }
    }
}
