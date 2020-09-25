<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function __invoke($id)
    {
        // Cache::rememberForever('article:id:$id', function() use ($id) {
        //     return Article::find($id);
        // });
        // $article = Cache::get('article:id:$id');
        $article = Article::find($id);
        $article = json_decode(json_encode($article));

        return view('articleViews', ['id'=>$id])->with(compact('article'));
    }
}
