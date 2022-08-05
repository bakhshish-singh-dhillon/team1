<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->search) {
            $products = Product::where('price', 'like', '%' . $request->search . '%')
                ->orWhere('name', 'like', '%' . $request->search . '%')->paginate(9)->withQueryString();
            $categories = Category::whereNull('category_id')->get();
            $title = "Searching for " . $request->search;
        } else {
            $products = Product::latest()->orderBy('id', 'asc')->paginate(10);
            $categories = Category::pluck('name', 'id');
            $title = "Products";
        }
        return view('admin/products/index', compact('products', 'categories', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin/products/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // Retrieve the validated input data...
        $valid = $request->validated();

        $product = Product::create([
            'sku' => $valid['sku'],
            'name' => $valid['name'],
            'price' => $valid['price'],
            'description' => $valid['description'],
            'measure_unit' => $valid['measure_unit'],
            'category_id' => $valid['category_id'],
            'quantity' => $valid['quantity']

        ]);
        if ($request->file('image_upload')) {
            foreach ($request->file('image_upload') as $file) {
                $product->images()->create(['url' => basename($file->store('public/images'))]);
            }
        }
        if ($request->has('key')) {
            foreach ($valid['key'] as $index => $value) {
                $product->product_metas()->create([
                    'name' => $value,
                    'value' => $valid['value'][$index]
                ]);
            }
        }

        if ($request->has('category_id')) {
            foreach ($valid['category_id'] as $index => $value) {
                $product->categories()->attach($valid['category_id']);
            }
        }
        return redirect('/admin/products')->withSuccess('Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        $product_metas = $product->product_metas()->get()->pluck('value', 'name');
        $images = $product->images()->get()->pluck('url');
        return view('admin/products/edit', compact('categories', 'product', 'product_metas', 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // Retrieve the validated input data...
        $valid = $request->validated();

        $product->update([
            'sku' => $valid['sku'],
            'name' => $valid['name'],
            'price' => $valid['price'],
            'description' => $valid['description'],
            'measure_unit' => $valid['measure_unit'],
            'category_id' => $valid['category_id'],
            'quantity' => $valid['quantity']

        ]);
        if ($request->file('image_upload')) {
            foreach ($product->images()->get() as $file) {
                if (Storage::exists('public/images/' . $file->url)) {
                    Storage::delete('public/images/' . $file->url);
                }
            }
            $product->images()->delete();
            foreach ($request->file('image_upload') as $file) {
                $product->images()->create(['url' => basename($file->store('public/images'))]);
            }
        }
        if ($request->has('key')) {
            $product->product_metas()->delete();
            foreach ($valid['key'] as $index => $value) {
                $product->product_metas()->create([
                    'name' => $value,
                    'value' => $valid['value'][$index]
                ]);
            }
        }

        if ($request->has('category_id')) {
            foreach ($valid['category_id'] as $index => $value) {
                $product->categories()->detach();
                $product->categories()->attach($valid['category_id']);
            }
        }
        return redirect('/admin/products')->withSuccess('Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->delete()) {
            session()->flash('success', 'Product deleted successfully');
            return redirect('/admin/products');
        }
        session()->flash('error', 'Sorry, Unable to create new product');
        return redirect('/admin/products');
    }
}
