<?php

namespace App\Http\Controllers;
use App\Models\games as Game;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $games = Game::when($search, function($query, $search){
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString();
        return view('admin.games.index',compact('games'));
    }
    public function show(Game $game){
        return view('admin.games.show', compact('game'));
    }
    public function destroy(Game $game){
        $game->delete();
        return redirect()->route('admin.games.index')
        ->with('success','Game deleted successfully');
    }
}

