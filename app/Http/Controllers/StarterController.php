<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class StarterController extends Controller
{
    public function showHome()
    {
        $article = Article::orderBy('id', 'desc')->first();
        return view('blog')->with('article', $article);
        //return view('blog')->with('articles', $articles);
        //return 'sip';
    }
}
