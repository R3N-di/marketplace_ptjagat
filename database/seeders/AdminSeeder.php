<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Factory::create('id_ID');


        for ($i = 0; $i < 5; $i++) {

            $id = Str::uuid();


            $first_name = $faker->firstName;
            $last_name = $faker->lastName;
            $email = $faker->unique()->safeEmail;
            $password = bcrypt('password123');


            DB::table('admins')->insert([
                'id' => $id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password,
            ]);
        }
    }
}
