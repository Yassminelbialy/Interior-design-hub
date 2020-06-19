<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Auth::routes();


Route::get('/', function () {

    return view('auth.login');
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {


// ->middleware('can:manage-users')
Route::middleware('manager')->prefix('manager')->name('manager.')->group(function () {
    Route::any('/', function () {
        return view('admin.base');
    });
    Route::resource('project', 'Manager\ProjectController');
    Route::resource('category', 'Manager\CategoryController');
    Route::resource('project.images', 'Manager\ProjectImageController');
    Route::resource('alexandra', 'Manager\AlexandrainfoController');
    Route::resource('contacts', 'Manager\ContactController');
    Route::resource('logo', 'Manager\LogoController');
    Route::resource('jops', 'Manager\JopController');
    Route::resource('review', 'Manager\ReviewController');
    Route::resource('fbPosts' ,'Manager\FacebookController');
    Route::resource('consultations' ,'Manager\ConsultationController');
    Route::resource('user' ,'Manager\AllUsersController');
    Route::resource('jobTrash' ,'Manager\JobTrashController');
    Route::resource('logoTrash' ,'Manager\LogoTrashController');
    Route::resource('reviewTrash' ,'Manager\ReviewTrashController');
    Route::resource('service', 'Manager\ServiceController');
    Route::resource('serviceTrash' ,'Manager\ServiceTrashController');
    Route::resource('quizzes' , 'Manager\QuizController');
    Route::resource('quizzes.images' , 'Manager\QuizImageController');
    Route::resource('analytics' ,'Manager\AnalyticsController');
    Route::resource('AdminOrder' , 'Manager\OrderAdminController');
    Route::get('users/{users}/order', 'Manager\OrderAdminController@updateOrder')->name('order');
    Route::resource('jopAppli' , 'Manager\JopApplicantController');
    Route::resource('topics' , 'Manager\TopicController');
    Route::resource('chatList' , 'Manager\ChatAdminController');
    Route::resource('sliderImage' , 'Manager\SliderImageController');
    Route::resource('company' , 'CompanyController');
    Route::get('users/{users}/company', 'CompanyController@ConfirmCompany')->name('company');
});
}); //manager routes



Route::middleware('user')->group(function () {

    Route::resource('profile', 'OrderController');
    Route::resource('chat', 'ChatController');
    Route::post('/companyForm', 'CompanyController@store')->name('company.form');
});

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('quiz/{id?}', 'Manager\QuizController')->name('quiz');
Route::resource('quiz', 'Manager\QuizController')->except(['store']);
Route::post('quiz/{id?}', 'Manager\QuizController@store');
Route::resource('project.images', 'Manager\ProjectImageController');
Route::post('/contact', 'Manager\ConsultationController@send');
Route::get('/', 'UserController@index');
Route::get('company/{id?}', 'UserController@indexCompany');

Route::get('/allproject/{category?}', 'UserController@allprojects')->where('category', '[A-Za-z1-9]+')->name('listAllProjects');
Route::get('/allprojectcustomsearch', 'UserController@customsearch');

Route::get('/search', 'UserController@search')->name('search');


Route::get('view/{id}', 'UserController@view')->name('project.view');
Route::get('jopapply/{id?}', 'Manager\JopApplicantController@create')->where('id', '[0-9]+')->name('applyjop');
Route::post('jopapply/{id?}', 'Manager\JopApplicantController@store')->where('id', '[0-9]+')->name('applyjopform');

Route::get('jops', 'Manager\JopApplicantController@index')->name('jops');

// Company Admin panel


    Route::middleware('company')->prefix('companypanel')->name('company.')->group(function () {
        Route::any('/', function () {
            return view('admin.companyBase');
        });


        Route::resource('project', 'CompanyAdmin\ProjectController');
        Route::resource('project.images', 'CompanyAdmin\ProjectImageController');
        Route::resource('alexandra', 'CompanyAdmin\AlexandrainfoController');
        Route::resource('contacts', 'CompanyAdmin\ContactController');
        Route::resource('jops', 'CompanyAdmin\JopController');
        Route::resource('review', 'CompanyAdmin\ReviewController');
        Route::resource('reviewTrash', 'CompanyAdmin\ReviewTrashController');
        Route::resource('consultations', 'CompanyAdmin\ConsultationController');
        Route::resource('user', 'CompanyAdmin\AllUsersController');
        Route::resource('trash', 'CompanyAdmin\TrashController');
        Route::resource('quizzes', 'CompanyAdmin\QuizController');
        Route::resource('quizzes.images', 'CompanyAdmin\QuizImageController');
        Route::resource('AdminOrder', 'CompanyAdmin\OrderAdminController');
        Route::get('users/{users}/order', 'CompanyAdmin\OrderAdminController@updateOrder')->name('order');
        Route::resource('jopAppli', 'CompanyAdmin\JopApplicantController');
        Route::resource('chatList', 'CompanyAdmin\ChatAdminController');

}); //manager routes


Route::get('dddd', function () {
    $dede = App\Project::find(1);
    return response()->json(['message' => 'User status updated successfully.', 'data' => [$dede]]);

    dd(session('COPMANY')->projects);
});

