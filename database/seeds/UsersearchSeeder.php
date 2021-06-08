<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Usersearch;
class UsersearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $user = new Usersearch();
            $user->name = $faker->name();
            $user->email = $faker->email();

            $user->save();
        }
    }
}
