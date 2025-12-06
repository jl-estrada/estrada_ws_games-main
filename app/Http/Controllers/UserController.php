<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $platform_users = User::all();
        return view('admin.users.index',compact('platform_users'));
    }

    public function show($user){
        return view ('admin.users.show', compact('user'));
    }

    public function block(User $user, Request $request){

        $request->validate([
            'block_reason' => 'required|string|max:255',
        ]);

        $user->is_blocked = true;
        $user->block_reason = $request->input('block_reason');
        $user->save();
        return redirect()->route('admin.users.index')
        ->with('success','User blocked successfully');
    }

    public function unblock(User $user){
        $user->is_blocked = false;
        $user->block_reason = null;
        $user->save();
        return redirect()->route('admin.users.index')
        ->with('success','User unblocked successfully');
    }
}

