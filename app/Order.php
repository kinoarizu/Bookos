<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{
    protected $fillable = ['user_id', 'full_address', 'shipment', 'payment', 'ship_cost', 'total_cost', 'payment_proof', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderedproduct()
    {
        return $this->hasMany(OrderedProduct::class, 'product_id');
    }
}
