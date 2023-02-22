<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //import schema
        Schema::defaultStringLength('191');
        $categories = Category::orderBy('updated_at', 'desc')->paginate(8);
        View::share('categories', $categories);
        //share product data with all views
        $products = Product::orderBy('updated_at', 'desc')->paginate(10);
        View::share('products', $products);
        $featured_product = Product::orderBy('updated_at', 'desc')->first();
        View::share('featured_product', $featured_product);

        $featured_products = Product::orderBy('updated_at', 'desc')->take(4)->get();
        View::share('featured_products', $featured_products);






    }
}
