<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PlayListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'https://i.ytimg.com/vi/dYK1kcxrlyE/maxresdefault.jpg',
            'https://i.ytimg.com/vi/pXi3AopML34/maxresdefault.jpg',
            'https://i.ytimg.com/vi/e2Xx7WcvEns/maxresdefault.jpg',
            'https://i.ytimg.com/vi/y7_2pBNUD0E/maxresdefault.jpg'
        ];
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('play_lists')->insert([
                'name' => $faker->name,
                'thumb' =>  $images[array_rand($images)],
                'description' => $faker->text,
                'user_id' => rand(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
