<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class DashboardDonateController extends Controller
{
    public function index(){

        $donates = Donate::all();
        return view('dashboard.donate', compact('donates'));
    }
}
