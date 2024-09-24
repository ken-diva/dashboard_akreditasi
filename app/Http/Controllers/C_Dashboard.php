<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Dashboard extends Controller
{
    public function index()
    {
        return view('pages.dashboard.dashboard', [
            'title' => 'Dashboard',
            'bread_item' => 'Dashboard',
            'bread_item_active' => 'Dashboard',
        ]);
    }
}
