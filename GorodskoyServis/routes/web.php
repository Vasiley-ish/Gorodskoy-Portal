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
    return view('home');
});


Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/userroom', function () {
    return view('userroom');
})->middleware(['auth'])->name('userroom');

Route::get('/user-create-form', function () {
    return view('form');
})->middleware(['auth'])->name('user-create-form');

Route::get('/admin', function () {
    return view('adminpanel');
})->middleware(['auth'])->name('admin');

require __DIR__.'/auth.php';
