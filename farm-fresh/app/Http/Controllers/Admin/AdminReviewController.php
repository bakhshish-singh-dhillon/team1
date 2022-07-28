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
    public function index(Request $request)
    {

        if ($request->search) {
            $reviews = Review::where('id', 'like', '%' . $request->search . '%')
                ->orWhere('review', 'like', '%' . $request->search . '%')
                ->orWhere('rating', 'like', '%' . $request->search . '%')->paginate(9);
            $title = "Searching for '" . $request->search . "'";
        } else {
            $reviews = Review::latest()->paginate(10);
            $title = "All Reviews";
        }
        return view('admin/reviews/index', compact('reviews', 'title'));
    }

    public function destroy(Review $review)
    {
        if ($review->delete()) {
            session()->flash('success', 'review deleted successfully');
            return redirect('/admin/reviews');
        }
    }
}
