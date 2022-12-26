<?php

namespace Database\Seeders;

use App\Models\People;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'e-mail' => $faker->email,
                'street' => $faker->streetAddress,
                'city' => $faker->city,
                'house number' => $faker->numberBetween($min = 1, $max = 1000),
            ]);
        }
    }
}