<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(9);
        $categories = Category::pluck('name', 'id');
        return view('products/index', compact('products', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $products = Product::latest()->take(4)->get();
        $reviews = Review::where('product_id', "{$id}")->latest()->take(4)->get();
        // var_dump($reviews);
        $prod = Product::find($id);
        return view('products/show',  compact('product', 'products', 'prod', 'reviews'));
    }
}
