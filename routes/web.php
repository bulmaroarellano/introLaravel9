<?php

use App\Http\Controllers\PageController;
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

//MEetodo 3, agrupando por controlador

Route::controller(PageController::class)->group(
    function () {
        Route::get('/'.'home')->name('home');
        Route::get('blog'.'blog')->name('blog');
        Route::get('blog/{post:slug}', 'post')->name('post');
    });

//Meotodo 2, el tradicional

/*Route::get('home', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
*/

//       Méetodo 1 ---------//
/*

Route::view('/', 'home')->name('home');


Route::get('blog', function () {
    $posts = [
        ['id' => '1', 'title' => 'PHP', 'slug' => 'php'],
        ['id' => '2', 'title' => 'Blog', 'slug' => 'blog'],

    ];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    $post = $slug;

    return view('post', ['post' => $post]);
})->name('post');
*/
