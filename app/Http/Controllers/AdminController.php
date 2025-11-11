<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Naming convention
    //Index = show all
    //show = one record
    //create
    //update
    //delete
    public function index(){
        $admin_users = Admin::all();
        return view('admin.index',compact('admin_users'));
    }
}
