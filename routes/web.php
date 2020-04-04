<?php

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

Route::get('/post/{post}', 'PostsController@show');
