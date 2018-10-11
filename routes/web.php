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

Route::get('/test', function() {
    return view('editnotice');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/index/notice', 'HomeController@index')->name('home');

    Route::get('/index/notice', [
        'uses'=>'NoticeController@index',
        'as'=>'notice.index'
    ]);

    Route::get('/show/notice/{id}', [
        'uses'=>'NoticeController@show',
        'as'=>'notice.show'
    ]);

    Route::get('/delete/notice/{id}', [
        'uses'=>'NoticeController@destroy',
        'as'=>'notice.delete'
    ]);

    Route::get('/edit/notice/{id}', [
        'uses'=>'NoticeController@edit',
        'as'=>'notice.edit'
    ]);

    Route::post('/create/notice', [
        'uses'=>'NoticeController@create',
        'as'=>'notice.create'
    ]);
    
    Route::post('/store/notice', [
        'uses'=>'NoticeController@store',
        'as'=>'notice.store'
    ]);

    Route::get('/search/notice', [
        'uses'=>'NoticeController@search',
        'as'=>'notice.search'
    ]);

});

