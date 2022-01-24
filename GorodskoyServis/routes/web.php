<?php

use App\Http\Controllers\FormSubmitController;
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

Route::get('/',  [FormSubmitController::class, 'showhub']);


require __DIR__.'/auth.php';

Route::group([ 'middleware' => ['auth']], function () {
    
    Route::get('/dashboard', 
        [FormSubmitController::class, 'showhub']
    )->name('dashboard');
    
    Route::get('/userroom', 
        [FormSubmitController::class, 'show']
    )->name('userroom');
    
    Route::get('/user-create-form', function () {
        return view('form');
    })->name('user-create-form'); 

    Route::post('/user-create-form/submit', 
        'App\Http\Controllers\FormSubmitController@submit'
    )->name('usersubmit'); 
});


Route::group(['middleware' => ['role:admin']], function () {
    
    Route::get('/admin',  [FormSubmitController::class, 'showadmin']
    )->name('admin');

});
