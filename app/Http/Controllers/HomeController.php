<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke()
    {
        Cache::remember('articlesAll', 15, function(){
            return Article::all();
        });
        $articlesAll = Cache::get('articlesAll');
        $articlesAll = json_decode(json_encode($articlesAll));

        return view('homeViews')->with(compact('articlesAll'));
    }
}
