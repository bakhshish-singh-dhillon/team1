<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
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
    public function index()
    {
        $reviews = Review::latest()->paginate(10);
        return view('admin/reviews/index', compact('reviews'));
    }

    public function destroy(Review $review)
    {
        if ($review->delete()) {
            session()->flash('success', 'review deleted successfully');
            return redirect('/admin/reviews');
        }
    }
}
