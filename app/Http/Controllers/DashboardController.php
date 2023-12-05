<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $admin = User::all();

        return view('admin/dashboard', compact('admin'));
    }
}
