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

Route::get('/', function () {
    return view('welcome');
});

//route basic
Route::get('/hello', function(){
    return "<h1 style='color:blue;'>hello world</h1>";
});

//route view
Route::get('/satu', function(){
    return view('satu');
});

Route::get('/kedua', function(){
    return view('kedua');
});

//route redirect untuk mengalihkan URI / rute
Route::redirect('/dua', '/kedua');
Route::redirect('/google', 'http://www.google.com');

//route parameter
Route::get('/user/{id}', function (string $id) {
    return 'user'.$id;
});

//route opsional
Route::get('/user/{name?}', function (string $name = 'John'){
    return $name;
});