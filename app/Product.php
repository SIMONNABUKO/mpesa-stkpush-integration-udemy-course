<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_category_id', 'product_description',
    'product_price', 'product_image','product_location', 'product_quantity', 'product_user_id'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}


