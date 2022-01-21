<?php

use App\Http\Controllers\FormSubmit;
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
    return view('dashboard');
});


require __DIR__.'/auth.php';

Route::group(['middleware' => ['role:user']], function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/userroom', function () {
        return view('userroom');
    })->name('userroom');
    
    Route::get('/user-create-form', function () {
        return view('form');
    })->name('user-create-form'); 

    Route::post('/user-create-form/submit', 
        'App\Http\Controllers\FormSubmitController@submit'
    )->name('usersubmit'); 
});


Route::group(['middleware' => ['role:admin']], function () {
    
    Route::get('/admin', function () {
        return view('adminroom');
    });    

});
