<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Follow;
use Illuminate\Support\Facades\DB;
use Auth;

class FollowsController extends Controller
{
     public function __construct(){
        $this->middleware(function ($request, $next){
            $this->user =\Auth::user();

            return $next($request);
        });
    }
}
