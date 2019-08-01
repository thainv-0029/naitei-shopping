<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\OrderDetail;
use App\Product;

class Order extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
