<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(ArtistsSeeder::class);
        // $this->call(SongsSeeder::class);
        // $this->call(Song_catagorySeeder::class);
        $this->call(Artist_songSeeder::class);
        // $this->call(PlayListSeeder::class);
        // $this->call(Playlist_songSeeder::class);
        // $this->call(Author_seeder::class);
        // $this->call(CategoriesSeeder::class);
    }
}
