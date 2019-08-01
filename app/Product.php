<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Category;
class Product extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
