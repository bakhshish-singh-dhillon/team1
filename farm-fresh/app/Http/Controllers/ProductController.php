<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Eloquent\Builder;
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
        $products = Product::latest()->orderBy('id', 'asc')->paginate(9);
        $categories = Category::whereNull('category_id')->get();
        $title = "Products";
        return view('products/index', compact('products', 'categories', 'title'));
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::latest()->get();

        $avgRating = number_format((float)$product->reviews->avg('rating'), 2, '.', '');

        $reviews = $product->reviews()->where('is_approved', '1')->simplePaginate(3);

        $ones = count($product->reviews()->where('rating', '1')->get());
        $twos = count($product->reviews()->where('rating', '2')->get());
        $threes = count($product->reviews()->where('rating', '3')->get());
        $fours = count($product->reviews()->where('rating', '4')->get());
        $fives = count($product->reviews()->where('rating', '5')->get());

        if (count($product->reviews()->get()) > 0) {
            $perOnes = number_format((float)$ones / (count($product->reviews()->get())) * 100);
            $perTwos = number_format((float)$twos / (count($product->reviews()->get())) * 100);
            $perThrees = number_format((float)$threes / (count($product->reviews()->get())) * 100);
            $perFours = number_format((float)$fours / (count($product->reviews()->get())) * 100);
            $perFives = number_format((float)$fives / (count($product->reviews()->get())) * 100);
        } else {
            $perOnes = 0;
            $perTwos = 0;
            $perThrees = 0;
            $perFours = 0;
            $perFives = 0;
        }

        return view('products/show',  compact(
            'product',
            'products',
            'reviews',
            'avgRating',
            'perOnes',
            'perTwos',
            'perThrees',
            'perFours',
            'perFives'

        ));
    }

    /**
     * Display a listing of the products by category.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductsByCategory(Category $category)
    {
        // $products = $category->products()->paginate(9);
        $products = Product::whereHas('categories', function (Builder $query) use ($category) {
            $query->whereIn('categories.id', array_merge($category->children->pluck('id')->toArray(), [$category->id]));
        })->paginate(9);
        $categories = Category::whereNull('category_id')->get();
        $title = "Category : " . $category->name;
        return view('products/index', compact('products', 'categories', 'title'));
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
                ->orWhere('name', 'like', '%' . $request->search . '%')->paginate(9)->withQueryString();
            $categories = Category::whereNull('category_id')->get();
            $title = "Searching for '" . $request->search . "'";
            return view('products/index', compact('products', 'categories', 'title'));
        }

        return redirect('/products');
    }
}
