<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCategoryController extends Controller
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
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        $parentCategories = Category::all();
        $title = "Categories";
        return view('admin/categories/index', compact('categories', 'parentCategories', 'title'));
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request['category-name'],
            'category_id' => $request['category_id'],

        ]);
        return redirect('/admin/categories')->withSuccess('Category created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Retrieve the validated input data...
        $valid = $request->validate([
            'category-name' => 'required',
        ]);

        $category->update([
            'name' => $valid['category-name'],
            'category_id' => $request['category_id'],

        ]);
        return redirect('/admin/categories')->withSuccess('Category updated successfully');
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return redirect('/admin/categories')->withSuccess('Category deleted successfully');
        }
        return redirect('/admin/categories')->withError('Something wrong! Please try again');
    }

    /**
     * Display a listing of the categories by search.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategoryBySearch(Request $request)
    {
        if ($request->search) {
            $parentCategories = Category::all();
            $categories = Category::where('name', 'like', '%' . $request->search . '%')
                ->orWhere('id', 'like', '%' . $request->search . '%')->paginate(9)->withQueryString();
            $title = "Searching for " . $request->search;
            return view('admin/Categories/index', compact('categories', 'parentCategories', 'title'));
        }

        return redirect('admin/categories');
    }
}
