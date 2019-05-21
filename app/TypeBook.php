<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBook extends Model
{
    protected $table = 'typebooks';
    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class, 'type_id');
    }
}
