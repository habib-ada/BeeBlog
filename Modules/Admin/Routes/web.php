<?php

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

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::post('/articles/edit/{id}', 'AdminController@saveEditOneArticle')->name('saveEdit');
    Route::get('/articles/edit/{id}','AdminController@showOneArticleToEdit')->name('oneArticleToEdit');
    Route::get('/articles/delete/{id}', 'AdminController@deleteOneArticle')->name('deleteOneArticle');
    Route::post('/articles/new', 'AdminController@saveNewArticle');
    Route::get('/articles/new', 'AdminController@showFormNewArticle')->name('addOneArticle');
    Route::get('/articles/detail/{id}','AdminController@showOneArticle')->name('oneArticle');
    Route::get('/articles','AdminController@showArticles')->name('showArticles');
    /*Route::get('/articles', function () {
        return view('admin::indexarticles');
    });*/
    Route::get('/', 'AdminController@index');
    Route::get('/tes', function () {
        return view('admin::indexmaster');
    });
});
