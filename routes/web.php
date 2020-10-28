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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/contact2', function () {
    return view('contact2');
});
Route::get('/product2', function () {
    return view('product2');
});