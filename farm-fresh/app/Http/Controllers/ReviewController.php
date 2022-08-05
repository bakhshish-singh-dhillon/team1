<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviews = Review::pluck('review', 'id');
        return view('products/show', compact('reviews'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product, Request $request)
    {
        // dd($request);
        // Retrieve the validated input data...
        $valid = $request->validate([
            'review' => 'required|string',
            'rating' => 'required'

        ]);
        Auth::user()->reviews()->create([

            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'review' => $valid['review'],
            'rating' => $valid['rating']

        ]);

        return back()->withSuccess('review added successfully');
    }
}
