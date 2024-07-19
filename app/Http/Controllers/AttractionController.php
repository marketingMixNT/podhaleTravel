<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    public function index(){

$attractions = Attraction::all();

        return view("pages.attraction.index", compact("attractions"));
    }
}
