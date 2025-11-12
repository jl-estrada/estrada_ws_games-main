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
}

