<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBranches = Branch::count();
        $recentBranch = Branch::latest()->first();

        return view('dashboard', compact('totalBranches', 'recentBranch'));
    }
}
