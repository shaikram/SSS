<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;//for hash or encryption
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Arr; //for array Fucntions
use laravel\helpers; // for helpers
use Faker\Generator;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
      
      for ($i=1; $i < 10; $i++) {
        
        User::create([
        "username" => $faker->name,
        "email" => $faker->email,
        "password" => Hash::make('faker'),
        "remember_token" => Str::random(10, 'Webslesson')
      ]);
      }
    }
}
