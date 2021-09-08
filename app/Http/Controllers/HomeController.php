<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    //index
    public function vacio(){return view('home.index');}

    //index
    public function index(){return view('home.index');}
    
    //about
    public function about(){return view('home.about');}

    //contacto
    public function contact(){return view('home.contact');}
}
