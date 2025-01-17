<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class LogoutController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session to prevent reuse
        $request->session()->invalidate();

        // Regenerate CSRF token to prevent security issues
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
