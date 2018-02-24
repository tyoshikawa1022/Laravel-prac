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

// Route::get('/admin/staff', StaffController::class.'@staffIndex');
// Route::get('/admin/edit', StaffController::class.'@staffEdit');

//     // 入力画面
// Route::get('/input', FormController::class.'@FormInput');
//     // 完了画面
// Route::post('/save', FormController::class.'@FormSave');

Route::group(['as' => 'form::'], function() {
 
    // 入力画面
    Route::get('/input', ['as' => 'input', 'uses' => 'FormController@input']);
    // 完了画面
    Route::post('/save', ['as' => 'save', 'uses' => 'FormController@save']);
 
});
