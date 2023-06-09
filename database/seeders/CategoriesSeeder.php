<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icon = '<i class="fa-solid fa-music"></i>';
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('categories')->insert([
                'name' => $faker->name,
                'description' => $faker->text,
                'icons' => $icon,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
