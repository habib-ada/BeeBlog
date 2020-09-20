<?php

namespace Modules\Admin\Http\Controllers;

use App\Article;
use App\Categories;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function saveEditOneArticle($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->id_category = $request->id_category;
        $article->save();
        $categories = Categories::all();
        $article = Article::find($id);
        return view('admin::editonearticle', ['action' => true, 'categories' => $categories, 'article' => $article]);
        //return $id;
    }

    public function showOneArticleToEdit($id)
    {
        $categories = Categories::all();
        $article = Article::find($id);
        return view('admin::editonearticle', ['categories' => $categories, 'article' => $article]);
    }

    public function deleteOneArticle($id)
    {
        Article::destroy($id);
        $articles = Article::all();
        return view('admin::indexarticles', ['action' => true, 'id' => $id, 'articles' => $articles]);
    }

    public function saveNewArticle(Request $request)
    {
        $judul = $request->title;
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->id_category = $request->id_category;
        $article->save();

        $categories = Categories::all();
        return view('admin::formnewarticle', ['categories' => $categories, 'action' => true, 'judul' => $judul]);
        //return view('admin::formnewarticle')->with('categories',$categories);
        //return 'Berhasil menyimpan';
        //return $request;
    }

    public function showFormNewArticle()
    {
        $categories = Categories::all();
        return view('admin::formnewarticle')->with('categories',$categories);
        //return 'Halaman Tambah Artikel Baru';
    }

    public function showOneArticle($id)
    {
        $article = Article::find($id);
        return view('admin::oneArticle')->with('article', $article);
        //return $article;
    }

    public function showArticles()
    {
        $articles = Article::all();
        return view('admin::indexarticles')->with('articles', $articles);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
