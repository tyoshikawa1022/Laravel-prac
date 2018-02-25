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
    //社員一覧画面
Route::get('/list','EmployeeController@list');