<?php

namespace App\Http\Controllers;


class SiteMapController extends Controller
{
    public function index()
    {
        for ($i=0;$i<200;$i++){
            $pre = env('MULU_HOST').env('MULU');
            $mulu[] = $pre.'/'.str_random(6).'/';
        }

        for ($i=0;$i<1500;$i++){
            $pre = env('MULU_HOST').env('MULU');
            $data[] = $pre.'/'.str_random(6).'/'.rand(100000,999999).'/';
        }

        return response()->view('sitemap', [
            'data' => $data,
            'mulu' => $mulu
        ])->header('Content-Type', 'text/xml');
    }
}