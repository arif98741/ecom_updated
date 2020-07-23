<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id', 'sub_category_name'
    ];


    /**
     * Relation with Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
