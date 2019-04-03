<?php

namespace App\Providers;

use Cart;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Slide;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('share.header', function ($view) {
            $categories = Category::whereStatus(1)->count();
            $binary = ceil($categories/2);
            $categories1 = Category::whereStatus(1)->where('id','<=',$binary)->get();
            $categories2 = Category::whereStatus(1)->where('id', '>', $binary)->get();
            $view->with([
                'categories' => $categories,
                'categories1' => $categories1,
                'categories2' => $categories2,
                'binary'      => $binary,
            ]);
        });
        View::composer('layouts.guest.master', function ($view) {
            $categories = Category::whereStatus(1)->count();
            $binary = ceil($categories / 2);
            $categories1 = Category::whereStatus(1)->where('id', '<=', $binary)->get();
            $categories2 = Category::whereStatus(1)->where('id', '>', $binary)->get();
            $categories = Category::whereStatus(1)->get();
            $view->with([
                'categories' => $categories,
                'categories1' => $categories1,
                'categories2' => $categories2,
                'binary'      => $binary,
            ]);
        });
        View::composer('share.slide', function ($view) {
            $slides = Slide::whereStatus(1)->get();
            $view->with([
                'slides' => $slides,
            ]);
        });
        View::composer('component.cart_modal', function ($view) {
            $carts = Cart::content();
            $view->with([
                'carts' => $carts,
            ]);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
