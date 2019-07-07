<?php

namespace App\Providers;
use App\Models\Video;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Page;
use App\Models\User;



use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    view()->share('cats',Category::get());
    view()->share('tags',Tag::get());
    view()->share('videos',Video::Published()->get());
    view()->share('users',User::get());
    view()->share('pages',Page::get());
    view()->share('music',Category::find(1));
    view()->share('fashion',Category::find(4));
    view()->share('sport',Category::find(3));
    view()->share('movie',Category::find(2));
    view()->share('tv',Category::find(5));
    view()->share('categories',Category::with('videos')->orderby('name','desc')->get());

    
    }
}
