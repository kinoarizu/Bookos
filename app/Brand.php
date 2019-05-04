<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['category_id', 'name_brands', 'country'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
