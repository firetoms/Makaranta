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



//Site Route
Route::get('/', 'SiteController@showHome');
Route::get('{slug}', 'SiteController@showPost');
//Auth Route

//Subs Route

//Account Route