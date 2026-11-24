<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navItems = MenuItem::activeTree();
        return view('web.home', compact('navItems'));
    }

    public function profile()
    {
        $navItems = MenuItem::activeTree();
        return view('web.profile', compact('navItems'));
    }
}
