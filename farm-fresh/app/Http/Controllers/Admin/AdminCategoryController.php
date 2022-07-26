<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin/categories/index', compact('categories', 'parentCategories'));
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Retrieve the validated input data...
        $valid = $request->validate([
            'category-name' => 'required',
        ]);
        $category = Category::create([
            'name' => $valid['category-name'],
            'category_id' => $request['category_id'],

        ]);
        return redirect('/admin/categories')->withSuccess('Category created successfully');
    }
}
