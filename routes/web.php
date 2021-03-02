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

Route::get('/', 'ArticleController@showArticle')->name('index');
Route::get('/about', [
    'as'=>'aboutone',
    'uses'=>'ArticleController@about'
]);
Route::get('/articleOne/{article}' , [
    'as' => 'articleOne',
    'uses'=>'Articlecontroller@articleOne'
]);
Route::get('/single_post/{article}' , [
    'as' => 'single_post',
    'uses'=>'Articlecontroller@single_post'
]);
Route::post('/addarticle', [
    'as'=>'addArticle',
    'uses'=>'ArticleController@addArticle'
]);

Route::get('/addtext', [
    'as'=>'addtext',
    'uses'=>'ArticleController@addtext'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/article-change/{article}' , [
    'as' => 'article-change',
    'uses'=>'Articlecontroller@articleChange'
]);
Route::get('/article-moderate/{article}' , [
    'as' => 'article-moderate',
    'uses'=>'Articlecontroller@articleModerate'
]);
Route::get('/article-list' , [
    'as' => 'article-list',
    'uses'=>'Articlecontroller@showMyUncheckedArticle'
]);

Route::get('/admin-access/' , [
    'as' => 'admin-access',
    'uses'=>'Articlecontroller@adminAccess',
     'middleware' => ['auth', 'can:user-panel']
]);

Route::post('/admin-access-save/}' , [
    'as' => 'admin-access-save',
    'uses'=>'Articlecontroller@adminAccessSave',
    'middleware' => ['auth', 'can:user-panel']
]);

Route::post('/article-save/{article}' , [
    'as' => 'article-save',
    'uses'=>'Articlecontroller@articleSave'
]);
Route::post('/article-check/{article}' , [
        'as' => 'article-check',
        'uses'=>'Articlecontroller@articleCheck'
    ]);
Route::get('/article-delete/{article}' , [
    'as' => 'article-delete',
    'uses'=>'Articlecontroller@articleDelete'
]);
Route::get('/article-menu' , [
    'as' => 'article-menu',
    'uses'=>'Articlecontroller@showMyArticle'
]);
Route::get('/addCategoriesView', [
    'as'=>'addCategoriesView',
    'uses'=>'CategoriesController@addCategoriesView'
]);
Route::post('/addCategoriesForm', [
    'as'=>'addCategoriesForm',
    'uses'=>'CategoriesController@addCategoriesForm'
]);
Route::post('/categories-save/{categories}' , [
    'as' => 'categories-save',
    'uses'=>'CategoriesController@categoriesSave'
]);
Route::get('/showCategories/{category}', [
    'as' => 'showCategories',
    'uses' => 'ArticleController@category'
]);
Route::post('/comment', [
    'as' => 'comment',
    'uses' => 'CommentController@new'
]);
// отправка нового комментария
Route::post('/comment', [
    'as' => 'comment',
    'uses' => 'CommentController@new'
]);

// отправка нового комментария
Route::post('/comment', [
    'as' => 'comment',
    'uses' => 'CommentController@new'
]);
