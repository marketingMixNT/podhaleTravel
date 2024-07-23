<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    public function index()
    {

        $attractions = Attraction::all();

        return view("pages.attraction.index", compact("attractions"));
    }

    public function show($slug)
    {
        $attraction = Attraction::with('categories')->where('slug->pl', $slug)->firstOrFail();

        $categoryIds = $attraction->categories->pluck('id');

        $similarAttractions = Attraction::with('categories')->whereHas('categories', function ($query) use ($categoryIds) {
            $query->whereIn('categories.id', $categoryIds);
        })
            ->where('id', '!=', $attraction->id)
            ->take(5)
            ->get();

      

        return view("pages.attraction.show", compact("attraction", "similarAttractions"));
    }
}
