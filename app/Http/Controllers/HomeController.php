<?php

namespace App\Http\Controllers;

use App\Lable;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sitemap()
    {
        return view('sitemap');
    }
}
