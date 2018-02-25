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


    // 入力画面
Route::get('/input','EmployeeController@input');
    // 完了画面
Route::post('/complete', 'EmployeeController@save');

//下記はgroup化した場合
// Route::group(['as' => 'form::'], function() {
//     // 入力画面
//     Route::get('/new', ['as' => 'input', 'uses' => 'EmployeeController@new']);
//     // 完了画面
//     Route::post('/complete', ['as' => 'save', 'uses' => 'EmployeeController@save']);

// });
