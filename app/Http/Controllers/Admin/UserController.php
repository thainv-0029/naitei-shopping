<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function show(){
        $users = User::where('role', '!=', '1')->get();
        
        return view ('admin.user', compact('users'));
    }
}

