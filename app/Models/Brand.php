<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand_name',
        'address',
        'mobile',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
