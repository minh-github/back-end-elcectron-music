<?php

namespace App\Http\Controllers;

use App\Models\artists;
use App\Models\categories;
use App\Models\playLists;
use App\Models\songs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MusicController extends Controller
{
    public function getSong($id)
    {
        $song = songs::with('artists')->find($id);
        $song->music_path = url('/storage/' . $song->music_path);
        $song->thumb = url('/storage/' . $song->thumb);
        $data = ['song' => $song];
        $response = response()->json($data);
        $response->header('Accept-Ranges', 'byte');
        return $response;
    }

    public function getAllSong()
    {
        $songs = songs::with('artists')->get();
        foreach ($songs as $song) {
            $song->thumb = url('/storage/' . $song->thumb);
        }
        $data = ['songs' => $songs];
        return response()->json($data);
    }

    public function getAllArtist()
    {
        $artists = artists::get();
        $data = ['artists' => $artists];

        return response()->json($data);
    }

    public function getAllCategory()
    {
        $categories = categories::get();
        $data = ['categories' => $categories];

        return response()->json($data);
    }

    public function getAllPlaylist()
    {
        $userId = Auth::user()->id;
        $playlist = playLists::get()->where('user_id', $userId);
        $data = ['playlist' => $playlist];

        return response()->json($data);
    }
}
