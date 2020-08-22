<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return redirect(route('article.index'));
})->name('index');

// Article Route Group
Route::group(['prefix' => 'article'], function () {
    Route::get('/', 'ArticleController@index')->name('article.index');
    Route::get('/show', 'ArticleController@show')->name('article.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
