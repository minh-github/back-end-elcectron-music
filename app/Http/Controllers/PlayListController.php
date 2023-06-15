<?php

namespace App\Http\Controllers;

use App\Models\playLists;
use App\Models\playListsSongs;
use Illuminate\Http\Request;

class PlayListController extends Controller
{
    public function addSong($id, $listId)
    {
        // $user = auth()->user();
        $playListId = playLists::where('id', $listId)->first()->id;
        if (!playListsSongs::where('play_lists_id', $playListId)->where('songs_id', $id)->first()) {
            $playListSong = playListsSongs::create([
                'play_lists_id' => $playListId,
                'songs_id' => $id
            ]);
            $playListSong->save();
            return response()->json(['msg' => 'Thêm bài hát vào playlist thành công'], 200);
        }
        return response()->json(['msg' => 'Bài hát đã tồn tại trong playlist'], 211);
    }

    function getSong($id)
    {
        $playListSong = playLists::find($id);
        if ($playListSong->thumb != '')
            $playListSong->thumb = url('/storage/' . $playListSong->thumb);
        foreach ($playListSong->songs as $song) {
            if ($song->thumb != '') {
                $song->thumb = url('/storage/' . $song->thumb);
            }
            $song['artists'] = $song->artists;
        }
        return response()->json(['playlistSongs' => $playListSong], 200);
    }

    function submitUpdate(Request $request, $id)
    {
        if ($request->file('image')) {
            $pathThumb = $request->file('image')->storeAs('public/playlistThumb', time() . '.' . $request->file('image')->extension());
            $pathThumb = str_replace('public/', '', $pathThumb);
            $playList = playLists::where('id', $id)->first();
            $playList->thumb = $pathThumb;
            $playList->save();
            $imageSrc = url('/storage/' . $pathThumb);
            return response()->json(['imageSrc' => $imageSrc, 'msg' => 'update ảnh thành công'], 200);
        }
        if ($request['name']) {
            $playList = playLists::where('id', $id)->first();
            $playList->name = $request['name'];
            $playList->save();
            return response()->json(['name' => $request['name'], 'msg' => 'upadate tên thành công'], 200);
        }
        return response()->json(['msg' => 'upadate thất bại'], 211);
    }

    function newPlaylist()
    {
        $user = auth()->user();
        $playList = playLists::create([
            'name' => 'Danh sách nhạc mới #' .  $user->playlist->count() + 1,
            'description' => '',
            'thumb' => '',
            'user_id' => $user->id
        ]);
        $playList->save();
        return response()->json(['msg' => 'tạo mới playlist thành công'], 200);
    }

    function getAllPlaylist()
    {
        $user = auth()->user();
        $allPlayList = playLists::where('user_id', $user->id)->get();
        foreach ($allPlayList as $playList) {
            if ($playList->thumb != '') {
                $playList->thumb = url('/storage/' . $playList->thumb);
            }
        }
        return response()->json(['allPlaylist' => $allPlayList, 'msg' => 'Lấy dữ liệu thành công'], 200);
    }
}
