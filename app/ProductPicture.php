<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    protected $table = 'products_pictures';
    protected $fillable = ['product_id', 'picture'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
