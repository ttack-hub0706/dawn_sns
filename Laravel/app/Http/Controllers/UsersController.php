<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follow;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function search(){
        return view('users.search');
    }

    public function follows_show(User $User)
    {

    }
}
