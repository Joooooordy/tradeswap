<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if (Auth::id() != $id) {
             abort(403, 'Unauthorized action.');
        }

        // Fetch the user by ID
        $user = User::findOrFail($id);

        // Return a view with the user details
        return view('users.view', compact('user'));
    }
}
