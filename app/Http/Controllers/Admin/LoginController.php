<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;

class LoginController extends Controller
{
    public function show(){
        return view ('admin.login');
    }

    public function login(Request $req){
        $user = new User();
        $user->validatorLogin($req);
        $message = $user->checkInfo($req);
        switch($message){
            case 0:
                $message = "Username Invalid!";
                return redirect ('/admin');
            case 1:
                $message = "Username Invalid!";
                break;
            case 2:
                $message = "Password Invalid!";
                break;
            case 3:
                $message = "Role Invalid!";
                break;
        }
        return view ('admin.login', compact('message'));
    }
}
