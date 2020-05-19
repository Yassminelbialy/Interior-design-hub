<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ->middleware('can:manage-users')
Route::prefix('manager')->name('manager.')->group(function(){

    Route::resource('project', 'ProjectController');
    Route::resource('category', 'CategoryController');
    // Route::resource('project', 'ProjectController');

});

