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

Route::get('/', 'PageController@home')->name('home');
Route::resource('posts', 'PostController')->names([
    'index' => 'posts',
    'show' => 'post',
    'create' => 'post_create',
    'store' => 'post_store',
    'update' => 'post_update',
    'delete' => 'post_delete'
]);
