<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
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
            DB::table('songs')->insert([
                'name' => $faker->name,
                'music_path' => 'songs/LonelyLove-TrangHanHoangThongTDK-5649019.mp3',
                'authors_id' => $i + 1,
                'thumb' =>  $images[array_rand($images)],
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
