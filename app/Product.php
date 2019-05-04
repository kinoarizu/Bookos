<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'brand_id', 'name_product', 'price', 'stock', 'rating', 'description'];

    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }

    public function productpicture()
    {
        return $this->hasMany(ProductPicture::class, 'product_id');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
