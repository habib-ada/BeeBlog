<?php

use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::post('/', function (Request $request) {
    //$title = $request->input('title');
    $title = $request->title;
    return view('welcome')->with('title', $title);
});*/

/*Route::get('/', function () {
    //$articles = DB::table('articles')->get();
    $articles = Article::all();
    return view('blog')->with('articles', $articles);
});*/

Route::get('/', 'StarterController@showHome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
