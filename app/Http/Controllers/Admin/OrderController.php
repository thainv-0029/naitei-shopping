<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function show(){
        $orders = Order::all();
        
        return view ('admin.order', compact('orders'));
    }
}
