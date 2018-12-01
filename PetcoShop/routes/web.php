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
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/cow', function () {
    return view('pages.cow');
});

Route::get('/buffalo', function () {
    return view('pages.buffalo');
});

Route::get('/camel', function () {
    return view('pages.camel');
});
Route::get('/goat', function () {
    return view('pages.goat');
});



Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/koshai', function () {
    return view('pages.koshai');
});

Route::get('/transport', function () {
    return view('pages.transport');
});

Route::get('/contact', function () {
    return view('pages.contact');
});





