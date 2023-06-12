<?php

namespace App\Http\Controllers;

use App\Models\playLists;
use App\Models\playListsSongs;
use Illuminate\Http\Request;

class PlayListController extends Controller
{
    public function addSong($id)
    {
        $user = auth()->user();
        $playListId = playLists::where('user_id', $user->id)->first()->id;

        if (!$playListId) {
            $playList = playLists::create([
                'name' => $user->name . ' playlist',
                'description' => '',
                'thumb' => '',
                'user_id' => $user->id
            ]);
            $playList->save();
            $playListId = $playList->id;
        }
        $playListSong = playListsSongs::create([
            'play_lists_id' => $playListId,
            'songs_id' => $id
        ]);
        $playListSong->save();

        return response()->json(['msg' => 'Thêm bài hát vào playlist thành công'], 200);
    }

    function getSong($id)
    {
        $playListSong = playLists::find($id)->with('songs')->first();
        foreach ($playListSong->songs as $song) {
            $song->thumb = url('/storage/' . $song->thumb);
            $song['artists'] = $song->artists;
        }
        return response()->json(['playlistSongs' => $playListSong], 200);
    }
}
