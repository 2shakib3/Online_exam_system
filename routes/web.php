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
    return view('Frontend.homeContent');
})->name('user');

Route::get('/exam', function () {
    return view('Frontend.exam');
})->name('user.exam');

Route::get('/test', function () {
    return view('Frontend.test');
})->name('user.test');

Route::get('/admin', function () {
    return view('Backend.Admin_dashboard.homeContent');
})->name('admin.dashboard');


Route::get('/catagory', function () {
    return view('Backend.Catagory.homeContent');
})->name('admin.catagory');


Route::get('/subcatagory', function () {
    return view('Backend.SubCatagory.homeContent');
})->name('admin.subcatagory');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
