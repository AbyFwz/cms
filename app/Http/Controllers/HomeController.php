<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function __invoke()
    {
        $articlesAll = Article::all();
        $articlesAll = json_decode(json_encode($articlesAll));

        return view('homeViews')->with(compact('articlesAll'));
    }
}
