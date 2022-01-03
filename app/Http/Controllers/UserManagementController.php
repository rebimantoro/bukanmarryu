<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function index()
    {
        $users = User::all();
        $user = $users->intersect(User::whereIn('is_admin', [0])->get());
        return view('user_management.index', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user_management');
    }
}
