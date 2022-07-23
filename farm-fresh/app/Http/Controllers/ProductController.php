<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(9);
        $categories = Category::whereNull('category_id')->get();
        return view('products/index', compact('products', 'categories'));
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::latest()->take(4)->get();

        $avgRating = number_format((float)$product->reviews->avg('rating'), 2, '.', '');

        return view('products/show',  compact('product', 'products', 'avgRating'));
    }

    /**
     * Display a listing of the products by category.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductsByCategory(Category $category)
    {
        $products = $category->products()->paginate(9);
        $categories = Category::whereNull('category_id')->get();
        return view('products/index', compact('products', 'categories'));
    }

    /**
     * Display a listing of the products by search.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductsBySearch(Request $request)
    {
        if ($request->search) {
            $products = Product::where('description', 'like', '%' . $request->search . '%')
                ->orWhere('name', 'like', '%' . $request->search . '%')->get();
            $categories = Category::whereNull('category_id')->get();
            return view('products/index', compact('products', 'categories'));
        }

        return redirect('/products');
    }
}
