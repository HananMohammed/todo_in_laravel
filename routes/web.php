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
Route::get('/todo', function () {
    return view('todo');
});

Route::get('/whattodo', function () {
    return view('whattodo');
});

Route::POST('todo/remind','todocontroller@remind');
Route::get('/whattodo','todocontroller@getData');
Route::POST('whattodo/delete','todocontroller@delete');

 