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

    public function show(Attraction $attraction)
    {

        $attraction = Attraction::with('categories')->find($attraction->id);

        return view("pages.attraction.show", compact("attraction"));
    }
}
