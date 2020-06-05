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

Route::get('/ceo','AlexandrainfoController@index');


// ->middleware('can:manage-users')
Route::prefix('manager')->name('manager.')->group(function(){
    Route::any('/', function () {
        return view('admin.base');
    });
    Route::resource('project', 'ProjectController');
    Route::resource('category', 'CategoryController');
    Route::resource('project.images', 'ProjectImageController');
    Route::resource('alexandra', 'AlexandrainfoController');
    Route::resource('fbPosts' ,'FacebookController');
    Route::resource('consultations' ,'FacebookController');


});//manager routes

Route::resource('quiz', 'QuizController');


Route::resource('project.images', 'ProjectImageController');
Route::post('/contact','ConsultationController@send');
Route::get('/','UserController@index');
Route::get('view/{id}', 'UserController@view')->name('project.view');

