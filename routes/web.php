<?php

use Illuminate\Support\Facades\Route;


 //Админ роуты
Auth::routes();
Route::group(['prefix' => 'admin'], function() {
Route::group(['middleware' => 'admin'], function() {

 //Выдача прав пользователям

    Route::get('/admin-access/{user}' , [
        'as' => 'admin-access',
        'uses'=>'Articlecontroller@adminAccess',
    ]);

       //Добавление новых категорий

    Route::get('/addCategoriesView', [
        'as'=>'addCategoriesView',
        'uses'=>'CategoriesController@addCategoriesView'
    ]);

 //Вывод списка пользователей

    Route::get('/admin-user-list/', [
        'as' =>'admin-user-list',
        'uses'=>'ArticleController@adminUserList'
    ]);

 //Сохранение выданых прав пользователей

    Route::post('/admin_access_save/{user}' , [
        'as' => 'admin_access_save',
        'uses'=>'Articlecontroller@adminAccessSave',

    ]);


});
});

 //Модер роуты

Route::group(['prefix' => 'moderator'], function() {
Route::group(['middleware' => 'moderator'], function() {
    Route::get('/article-moderate/{article}' , [
        'as' => 'article-moderate',
        'uses'=>'Articlecontroller@articleModerate'
    ]);
    Route::get('/article-list' , [
        'as' => 'article-list',
        'uses'=>'Articlecontroller@showMyUncheckedArticle'
    ]);
    Route::post('/article-check/{article}' , [
        'as' => 'article-check',
        'uses'=>'Articlecontroller@articleCheck'
    ]);

});
});

//Главная страница

Route::get('/', 'ArticleController@showArticle')->name('index');

//Вывод конкретной статьи

Route::get('/articleOne/{article}' , [
    'as' => 'articleOne',
    'uses'=>'Articlecontroller@articleOne'
]);
//Сохранение статьи
Route::post('/addarticle', [
    'as'=>'addArticle',
    'uses'=>'ArticleController@addArticle'
]);
//Домашняя страница
Route::get('/home', 'HomeController@index')->name('home');

// Удаление статьей
Route::get('/article-delete/{article}' , [
    'as' => 'article-delete',
    'uses'=>'Articlecontroller@articleDelete'
]);
//Меню статьей пользователя
Route::get('/article-menu' , [
    'as' => 'article-menu',
    'uses'=>'Articlecontroller@showMyArticle'
]);
// Добавление категорий
Route::post('/addCategoriesForm', [
    'as'=>'addCategoriesForm',
    'uses'=>'CategoriesController@addCategoriesForm'
]);
// Сохранение категорий
Route::post('/categories-save/{categories}' , [
    'as' => 'categories-save',
    'uses'=>'CategoriesController@categoriesSave'
]);
// отображение статтей по категориям
Route::get('/showCategories/{category}', [
    'as' => 'showCategories',
    'uses' => 'ArticleController@category'
]);
//Сохранение комментария
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

