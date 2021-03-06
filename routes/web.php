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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/keys/register', 'Keys\RegisterController@index')->name('keys/register');

Route::get('/keys/list', 'Keys\ListController@index')->name('keys/list');

Route::post('/keys/register', 'Keys\RegisterController@save')->name('keys/register');

Route::get('/systems/register', 'Systems\RegisterController@index')->name('systems/register');

Route::post('/systems/register', 'Systems\RegisterController@register')->name('systems/register');

Route::get('/systems/list', 'Systems\ListController@index')->name('systems/list');


