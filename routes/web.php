<?php

use App\Livewire\Home;
use Livewire\Livewire;
use App\Livewire\Blog\BlogIndex;
use App\Livewire\City\CityIndex;


use Illuminate\Support\Facades\Route;


use App\Livewire\Category\CategoryIndex;

use App\Livewire\Blog\BlogShow;
use App\Livewire\Attraction\AttractionShow;
use App\Livewire\Attraction\AttractionIndex;
use App\Livewire\Contact\ContactIndex;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/', Home::class)->name('home');
    Route::get('/atrakcje', AttractionIndex::class)->name('attraction.index');
    Route::get("/atrakcje/{slug}", AttractionShow::class)->name('attraction.show');
    Route::get('/kategorie', CategoryIndex::class)->name('category.index');
    Route::get('/miejscowosci', CityIndex::class)->name('city.index');
    Route::get('/kontakt', ContactIndex::class)->name('contact');
    Route::get('/blog', BlogIndex::class)->name('blog.index');
    Route::get('/blog/{slug}', BlogShow::class)->name('blog.show');
});
