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


//Trang quản trị
Route::get('kiemduyet',[
    'as' => 'kiem-duyet',
    'uses' => 'PageController@getKD'
]);

//Trang thư ký
Route::get('thuky',[
    'as' => 'thu-ky',
    'uses' => 'PageController@getDX'
]);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/export', 'HomeController@export')->name('export');
