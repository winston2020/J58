<?php

namespace App\Http\Controllers;


class SiteMapController extends Controller
{
    public function index()
    {
        for ($i=0;$i<1500;$i++){
            $pre =['http://www.nefi.com.cn/clu','http://www.nefi.com.cn/clu'];
            $data[] = array_random($pre).str_random(4).rand(100000,999999).'.html';
        }

        for ($i=0;$i<200;$i++){
            $pre =['http://www.nefi.com.cn/clu','http://www.nefi.com.cn/clu'];
            $mulu[] = array_random($pre).str_random(4).'/';
        }

        return response()->view('sitemap', [
            'data' => $data,
            'mulu' => $mulu
        ])->header('Content-Type', 'text/xml');
    }

    public function test()
    {
        for ($i=0;$i<500;$i++){
            echo 'http://zikao.eol.cn/clu'.str_random(3).rand(1000000,9999999).'/';
            echo '<br>';
        }
    }

}