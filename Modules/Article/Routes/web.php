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

use Modules\Article\TestBusiness\Accessories;

Route::prefix('article')->group(function () {
    Route::get('/', 'ArticleController@index')->name('publicAllArticle');
    Route::get('/{id}', 'ArticleController@showOneArticle')->name('publicOneArticle');
    Route::get('/test/test', function () {
        $objAcc = new Accessories();
        return $objAcc->jumlah;
        //return 'tes';
    });
});
