<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile.index', compact('user', 'profile'));
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = Profile::firstOrCreate(
            ['user_id' => $user->id],
            ['name' => $user->username] // デフォルト値を設定
        );
        return view('profile.edit', compact('user', 'profile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        if ($profile) {
            // ユーザー情報の更新
            $user->update($request->only(['username', 'email', 'gender']));
            // プロフィール情報の更新
            $profile->update($request->except(['username', 'email', 'gender']));
            $profile->update(['interests' => $request->input('interests')]);
            return redirect()->route('profile.index')->with('success', 'プロフィールが更新されました。');
        }
        return redirect()->route('profile.index')->with('error', 'プロフィールの更新に失敗しました。');
    }
}