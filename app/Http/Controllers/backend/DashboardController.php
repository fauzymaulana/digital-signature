<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Ijazah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Dashboard',
            'navLink' => 'dashboard',
            'countIjazah' => Ijazah::count(),
        ];

        return view('backend.pages.dashboard', $datas);
    }
}
