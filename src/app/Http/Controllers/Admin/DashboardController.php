<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // dd(Auth::check());
        dd(Auth::guard('admin')->user());
        echo "<h1>Admin</h1>";
    }
}
