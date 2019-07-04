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
    view()->share('music',Category::find(5));
    view()->share('fashion',Category::find(8));
    view()->share('sport',Category::find(7));
    view()->share('movie',Category::find(6));
    view()->share('tv',Category::find(9));
    view()->share('catcount',Category::find(5)->videos()->count());
    view()->share('catcount1',Category::find(8)->videos()->count());
    view()->share('catcount2',Category::find(7)->videos()->count());
    view()->share('catcount3',Category::find(6)->videos()->count());
    view()->share('catcount4',Category::find(9)->videos()->count());


    }
}
