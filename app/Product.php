<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'brand_id', 'name_product', 'price', 'stock', 'rating', 'description'];

    public function productpicture()
    {
        return $this->hasMany(ProductPicture::class, 'product_id');
    }

    public function orderedproduct()
    {
        return $this->hasMany(OrderedProduct::class, 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function typebook()
    {
        return $this->belongsTo(TypeBook::class, 'type_id');
    }
}
