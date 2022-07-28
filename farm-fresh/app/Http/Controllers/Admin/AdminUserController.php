<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
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
            $users = User::where('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('last_name', 'like', '%' . $request->search . '%')
                ->orWhere('id', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')->paginate(9);
        } else {
            $users = User::latest()->paginate(10);
        }
        return view('admin/users/index', compact('users'));
    }

    public function destroy(User $user)
    {
        if ($user->delete()) {
            session()->flash('success', 'User deleted successfully');
            return redirect('/admin/users');
        }
    }
}
