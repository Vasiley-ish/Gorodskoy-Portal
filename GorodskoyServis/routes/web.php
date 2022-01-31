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
    
    Route::get('/user-create-form', 
    [FormSubmitController::class, 'showCats']
    )->name('user-create-form'); 
      
    Route::get('/userroom/{id}/delete',
        [FormSubmitController::class, 'delete']
    )->name('delete'); 

    Route::post('/user-create-form/submit', 
        'App\Http\Controllers\FormSubmitController@submit'
    )->name('usersubmit'); 
 
});


Route::group(['middleware' => ['role:admin']], function () {
    
    Route::get('/admin',  [FormSubmitController::class, 'showadmin']
    )->name('admin');

    Route::get('/admin/{id}/approve',
    [FormSubmitController::class, 'approve']
    )->name('approve'); 

    Route::get('/admin/{id}/disprove',
    [FormSubmitController::class, 'disprove']
    )->name('disprove'); 

    Route::post('/admin/{id}/approve_application',
    'App\Http\Controllers\FormSubmitController@confirm_approve'
    )->name('confirm_approve'); 

    Route::post('/admin/{id}/disprove_application',
    [FormSubmitController::class, 'confirm_disprove']
    )->name('confirm_disprove'); 

    Route::get('/admin/category_mod',
    [FormSubmitController::class, 'showcategoryes']
    )->name('categoryes'); 

    Route::post('/admin/category_add',
    [FormSubmitController::class, 'newCategory']
    )->name('new-category'); 

    Route::get('/admin/category_mod/{id}/{category}',
    [FormSubmitController::class, 'delete_category']
    )->name('delete_category'); 

});
