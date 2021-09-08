<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //crear producto
    public function index(){return view('dashboard.index');}
}
