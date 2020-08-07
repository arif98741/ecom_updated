<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'shop_id', 'category_id', 'brand_id', 'color_id',
        'model', 'price', 'sale_price', 'description',
        'fea_image1'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class)->withDefault();
    }


}
