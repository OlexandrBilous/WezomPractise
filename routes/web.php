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

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('index');
});
Route::get('/blog.blade.php', function(){
    return view('blog');
});
Route::get('/', function () {
    return view('index')->with('description', 'BLog - Главная страница')
        ->with('title', 'Blog - Главная страница');
});
Route::get('/blog.blade.php', function () {
    return view('index')->with('description', 'Blog - Главная страница')
        ->with('title', 'Blog - Главная страница');
});
Route::get('/{page}', function ($page) {
    $data = array('description' => 'Blog - ' . $page,
        'title' => 'Blog - ' . $page);
    return view($page, $data);
});
