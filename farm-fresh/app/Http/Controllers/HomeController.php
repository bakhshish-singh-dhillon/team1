<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->get();
        $reviews = Review::where('rating', '5')->where('is_approved', '1')->latest()->take(2)->get();
        $categories = Category::whereNull('category_id')->get();
        $title = "Home";
        return view('home', compact('products', 'categories', 'reviews', 'title'));
    }
}
