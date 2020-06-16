<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Group admin
Route::group(['prefix' => 'admin', 'as' => 'admin.' , 'middleware' => 'auth' , 'namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'siswa', 'as' => 'siswas.'], function () { 
        Route::get('/', 'PhoneController@index')->name('index');
        Route::get('/create', 'PhoneController@create')->name('create');
        Route::post('/store', 'PhoneController@store')->name('store');
        Route::get('/nilai', 'PhoneController@nilai')->name('nilai');
    });
});

// Route::group(['prefix' => 'admin', 'as' => 'admin.' , 'namespace' => 'Admin'], function () {
//     Route::group(['prefix' => 'siswa', 'as' => 'siswa.'], function () { 
//         Route::get('/', 'PhoneController@index')->name('index');
//         Route::get('/create', 'PhoneController@create')->name('create');
//         Route::post('/store', 'PhoneController@store')->name('store');
//     });
// });
