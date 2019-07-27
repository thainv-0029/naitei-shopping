<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function show(){
        $categories = Category::all();
        
        return view ('admin.category', compact('categories'));
    }
}
