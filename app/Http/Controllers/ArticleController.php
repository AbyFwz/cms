<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function __invoke($id)
    {
        $article = Article::find($id);
        $article = json_decode(json_encode($article));

        return view('articleViews', ['id'=>$id])->with(compact('article'));
    }
}
