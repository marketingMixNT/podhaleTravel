<?php

use Livewire\Livewire;
use App\Models\Attraction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AttractionController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/', HomeController::class)->name('home');
    Route::get('/atrakcje', [AttractionController::class, 'index'])->name('attraction.index');
    Route::get("/atrakcje/{slug}", [AttractionController::class, 'show'])->name('attraction.show');
    Route::get('/kategorie',CategoryController::class)->name('category.index');
    Route::get('/miejscowosci',CityController::class)->name('city.index');
});
