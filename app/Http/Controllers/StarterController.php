<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class StarterController extends Controller
{
    public function showHome()
    {
        $allArticles = Article::all();
        $data['allArticles'] = $allArticles;
        $lastestArticle = Article::orderBy('id', 'desc')->first();
        $data['lastestArticle'] = $lastestArticle;
        //return $data;
        return view('blog', $data);
        //return view('blog')->with('lastestArticle', $lastestArticle);
        //return view('blog')->with('articles', $articles);
        //return 'sip';
    }
}
