<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\City;
use App\Models\Post;
use App\Models\Category;
use App\Models\Attraction;
use App\Observers\TagObserver;
use App\Observers\CityObserver;
use App\Observers\PostObserver;
use App\Observers\CategoryObserver;
use App\Observers\AttractionObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Attraction::observe(AttractionObserver::class);
        Category::observe(CategoryObserver::class);
        City::observe(CityObserver::class);
        Post::observe(PostObserver::class);
        Tag::observe(TagObserver::class);
    
    }
}
