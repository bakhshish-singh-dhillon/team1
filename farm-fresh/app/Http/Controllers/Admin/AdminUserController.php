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
                ->orWhere('email', 'like', '%' . $request->search . '%')->paginate(9)->withQueryString();
            $title = "Searching for " . $request->search;
        } else {
            $users = User::latest()->paginate(10);
            $title = "Users";
        }
        return view('admin/users/index', compact('users', 'title'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param User $user
     * @return void
     */
    public function destroy(User $user)
    {
        if ($user->delete()) {
            session()->flash('success', 'User deleted successfully');
            return redirect('/admin/users');
        }
    }

    /**
     * Update User.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $user->is_active = !$user->is_active;
        if ($user->save()) {
            session()->flash('success', 'User status updated successfully');
            return redirect('/admin/users');
        }
    }
}
