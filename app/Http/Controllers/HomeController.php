<?php

namespace App\Http\Controllers;

use App\Lable;

class HomeController extends Controller
{
    public function index()
    {
        return view('nyzy');
    }

    public function sitemap()
    {
        return view('sitemap');
    }
}
