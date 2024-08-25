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
}