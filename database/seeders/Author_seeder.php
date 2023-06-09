<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Author_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'thumb/1686197181.jpg'
        ];
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('authors')->insert([
                'name' => $faker->name,
                'avatar' => $images[array_rand($images)],
                'description' => $faker->text,
                'thumb' =>  $images[array_rand($images)],
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
