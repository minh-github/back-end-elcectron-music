<?php

namespace App\Http\Controllers;

use App\Models\artists;
use App\Models\artistsSongs;
use App\Models\authors;
use App\Models\songs;
use App\Models\songsCategories;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function submitAdd(Request $request)
    {
        $pathThumb = $request->file('thumb')->storeAs('public/thumb', time() . '.' . $request->file('thumb')->extension());
        $pathThumb = str_replace('public/', '', $pathThumb);
        $pathSong = $request->file('fileMusic')->storeAs('public/music', time() . '.' . $request->file('fileMusic')->extension());
        $pathSong = str_replace('public/', '', $pathSong);

        $author = authors::where('name', $request['author'])->first();
        $artist = artists::where('name', $request['artists'])->first();
        if (!$author) {
            $author = authors::create([
                'name' => $request['author'],
            ]);
            $author->save();
        }
        if (!$artist) {
            $artist = artists::create([
                'name' => $request['artists'],
            ]);
            $artist->save();
        }
        $song = songs::create([
            'name' => $request['name'],
            'thumb' => $pathThumb,
            'lyric' => $request['lyric'],
            'music_path' => $pathSong,
            'authors_id' => $author->id
        ]);
        $song->save();

        $songCategory = songsCategories::create([
            'songs_id' => $song->id,
            'categories_id' => $request['categoryId']
        ]);
        $songCategory->save();

        $artistSong = artistsSongs::create([
            'artists_id' => $artist->id,
            'songs_id' => $song->id,
        ]);
        $artistSong->save();

        return redirect('/')->with('success', 'Đã thêm ' . $song->name . ' thành công');
    }
}
