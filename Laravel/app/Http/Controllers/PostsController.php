<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $users = User::get(['username','mail']);
        $authId = Auth::id();
        $userFollowing = User::find($authId)->follow()->count();
        $userBeingFollowed = User::find($authId)->follower()->count();
        return view('posts.index', compact('userFollowing','userBeingFollowed'));
    }
}
