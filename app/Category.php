<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $fillable =['category_name', 'category_description'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
