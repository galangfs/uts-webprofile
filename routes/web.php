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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/work-detail', function () {
    return view('work-detail');
});
Route::get('/contact', function () {
    return view('contact');
});