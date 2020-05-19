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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello', function(){
//    echo 'Hello World !';
//});

Route::get('index','PostsController@index');
Route::get('post/create-form','PostsController@createForm');
Route::get('post/{id}/update-form', 'PostsController@updateForm');
Route::get('post/{id}/delete', 'PostsController@delete');
Route::post('create','PostsController@create');
Route::post('update','PostsController@update');

// Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容内容']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
