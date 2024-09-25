<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_Dashboard extends Controller
{
    public function index()
    {
        // $data = DB::table('faculty')->get();
        // dd($data);

        return view('pages.dashboard.dashboard', [
            'title' => 'Dashboard',
            'bread_item' => 'Dashboard',
            'bread_item_active' => 'Dashboard',
        ]);
    }

    public function metric()
    {
        return view('pages.dashboard.metric', [
            'title' => 'Metrik dan Score',
            'bread_item' => 'Dashboard',
            'bread_item_active' => 'Metrik dan Score Analitik',
        ]);
    }
}
