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

Route::get('/', 'Front\FrontendController@home')->name('front.index');
Route::get('/contact', 'Front\FrontendController@contact')->name('front.contact');
Route::get('/inventory/{id1}/{id2}', 'Front\FrontendController@inventory')->name('front.inventory');
Route::get('/detail/{id1}/{id2}/{id3}', 'Front\FrontendController@detail')->name('front.detail');
Route::get('/geninventory/{id1}', 'Front\FrontendController@geninventory')->name('front.geninventory');
Route::get('/gendetail/{id1}/{id2}', 'Front\FrontendController@gendetail')->name('front.gendetail');
Route::post('/search', 'Front\FrontendController@search')->name('front.search');
Route::get('/admin', 'Admin\BackendController@home')->name('admin.admin');
Route::get('/login', 'Admin\BackendController@login')->name('admin.login');
Route::post('/excavator_save', 'Admin\BackendController@excavator')->name('admin.excavator');
Route::post('/tractor_save', 'Admin\BackendController@tractor')->name('admin.tractor');
Route::post('/utility_save', 'Admin\BackendController@utility')->name('admin.utility');
Route::post('/trailer_save', 'Admin\BackendController@trailer')->name('admin.trailer');
Route::post('/mower_save', 'Admin\BackendController@mower')->name('admin.mower');
Route::post('/implement_save', 'Admin\BackendController@implement')->name('admin.implement');
Route::post('/logincheck', 'Admin\BackendController@logincheck')->name('admin.logincheck');