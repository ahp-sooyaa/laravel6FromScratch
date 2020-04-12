<?php

use App\Articles;
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

// Route::get('/post/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'hello from first post',
//         'second-post' => 'hello from second post',
//         'balh' => 'hello from balh'
//     ];

//     if (!array_key_exists($post, $posts)) {
//         abort('404', 'sorry that is not found');
//     }

//     return view(
//         'test',
//         [
//             'post' => $posts[$post]
//         ]
//     );
// });

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $articles = Articles::latest()->get();

    return view('about', [
        'articles' => $articles
    ]);
});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
