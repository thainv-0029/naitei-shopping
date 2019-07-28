<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout(Request $req){
        $req->session()->forget('admin');
        return redirect('/admin/login');
    }
}
