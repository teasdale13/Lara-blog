<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\ClassHelper\RouteNameHelper;
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

Route::get('/', 'PageController@home')->name(RouteNameHelper::HOME);
Route::get('/about', 'PageController@about')->name(RouteNameHelper::ABOUT);
Route::resource('posts', 'PostController')->names([
    'index' => RouteNameHelper::POST_INDEX,
    'show' => RouteNameHelper::POST_SHOW,
    'create' => RouteNameHelper::POST_CREATE,
    'edit' => RouteNameHelper::POST_EDIT,
    'store' => RouteNameHelper::POST_STORE,
    'update' => RouteNameHelper::POST_UPDATE,
    'destroy' => RouteNameHelper::POST_DESTROY
]);
