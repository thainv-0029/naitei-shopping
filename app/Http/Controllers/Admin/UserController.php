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

    public function create_form(){
        return view ('admin.create.create_user');
    }

    public function create(Request $request){
        $user = new User();
        $message = $user->createUser($request);
        
        return view ('admin.create.create_user', compact('message'));
    }
}
