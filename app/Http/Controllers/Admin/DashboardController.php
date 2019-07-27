<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Category;
use App\Order;
use App\Product;

class DashboardController extends Controller
{
    public function show(){
        $users = User::all()->count();
        $products = Product::all()->count();
        $categories = Category::all()->count();
        $orders = Order::all()->count();

        return view('admin.dashboard', compact('users', 'products', 'categories', 'orders'));
    }
}

