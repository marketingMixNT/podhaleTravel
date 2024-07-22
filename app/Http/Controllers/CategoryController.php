<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $categories = Category::where('type','attractions')->get();

        return view("pages.category.index",compact("categories"));
    }
}
