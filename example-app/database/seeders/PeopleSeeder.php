<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\people;
use Faker\Factory as Faker;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 51 ; $i++){
            people::create([
                'NAME' => $faker->firstName,
                'SURNAME'  => $faker->lastName,
                'TELEPHONE' => $faker->phoneNumber,
                'STREET'     => $faker->streetName,
                'COUNTRY'   => $faker->country
            ]);
        } 
    }
}
?>