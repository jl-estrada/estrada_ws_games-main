<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

//Route for admin users
Route::get('/admin', [AdminController::class,'index']);
//Route for platform users
Route::get('/admin/users',[UserController::class,'index']);
//Route for usernames
Route::get('/admin/users/{username}',function($username){
    return view('admin.users.show');
});
//Route for games
Route::get('/admin/games',[GamesController::class,'index']);
//Route for one game
Route::get('/admin/games/{slug}',function($game){
    return view('admin.games.show');
});
//Route  for block
Route::put('/admin/users/{username}/block',function($username){
    return "<h1>Blocking...</h1>";
});
//Route  for unblock
Route::put('/admin/users/{username}/block',function($username){
    return "<h1>Unblocking...</h1>";
});
//Delete game
Route::delete('/admin/games/{slug}',function($game){
    return "<h1>Deleting Game...</h1>";
});
//user profile
Route::get('/users/{user}', [UserController::class,'show']);
//needs to import user class at the top
Route::get('test', function(){
    return User::all();
});




//to find user with id 1
Route::get('test', function(){
    return User::find(1);
});


//usrs that are not blocked
Route::get('test', function(){
    return User::where('is_blocked', 0)->get();
});

//users verified after a date
Route::get('test', function(){
    return User::where("email_verified_at", ">", "2024-05-05 12:00:00")->get();
});

//users with id 1,2,3
Route::get('test', function(){
    return User::whereIn('id', [1,2,3])->get();
});

