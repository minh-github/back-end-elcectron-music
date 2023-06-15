<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegister;
use App\Http\Requests\UserLogin;
use App\Models\playLists;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(UserRegister $request)
    {
        $validated = $request->validated();
        $validated["password"] = bcrypt($validated["password"]);
        $user = User::create($validated);
        return response()->json(["user" => $user, "msg" => "Đăng ký thành công"], 200);
    }

    function login(UserLogin $request)
    {
        $validated = $request->validated();
        if (Auth()->attempt($validated)) {
            $user = auth()->user();
            $token = $user->createToken("backend_electron")->accessToken;
            return response()->json(['user' => $user, 'token' => $token, 'msg' => 'đăng nhập thành công'], 200);
        } else {
            return response()->json(['msg' => 'đăng nhập thất bại'], 211);
        }
    }

    function getUser()
    {
        $user = auth()->user();
        $playList = playLists::where('user_id', $user->id)->with('songs')->get();
        foreach ($playList as $item) {
            if ($item->thumb != '') {
                $item->thumb = url('/storage/' . $item->thumb);
            }
        }
        return response()->json(['user' => $user, 'playlist' => $playList], 200);
    }
}
