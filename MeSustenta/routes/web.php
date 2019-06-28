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

Route::get('/teste', function() {
    return view('template');
});
Route::get('/home',function(){
    return view('home');
});
Route::get('/cadastro',function(){
    return view('cadastro');
});
Route::get('/contato',function(){
    return view('contato');
});
Route::get('/sobre', function(){
    return view('sobre');
});
Route::get('/produto', function(){
    return view('produto');
});