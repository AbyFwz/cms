<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home(){
        $articlesAll = Article::paginate(5);
        // $articlesAll = json_decode(json_encode($articlesAll));
        // echo '<pre>'; print_r($articlesAll); die;
        return view('homeviews')->with(compact('articlesAll'));
    }
}
