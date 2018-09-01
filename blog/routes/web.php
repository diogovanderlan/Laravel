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


// Route::get('welcome/{name?}', function($name = 'diogo'){
//     return "Seja bem vindo ". $name;
// })->where('name','[A-Za-z]+');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('site', function(){
    return view('home.templates.index');
});
Route::get('/sobre','PagesController@sobre');
Route::get('dashboard', function(){
    return view('dashboard');
});
Route::get('amigos','PagesController@amigos');
Route::get('/', 'PagesController@index');
