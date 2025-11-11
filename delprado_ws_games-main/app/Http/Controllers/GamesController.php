<?php

namespace App\Http\Controllers;
use App\Models\games;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){
        $games = games::all();
        return view('admin.games.index',compact('games'));
    }
}
