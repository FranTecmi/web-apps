<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the dashboard to the authenticated user.
     * Access is protected by the 'auth' middleware in routes/web.php.
     */
    public function index()
    {
        $user = Auth::user();
        $totalUsers = User::count();
        $recentUsers = User::latest()->take(5)->get();

        return view('dashboard', compact('user', 'totalUsers', 'recentUsers'));
    }
}
