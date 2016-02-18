<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/',function(){
    	return view('welcome');
    });

    Route::get('test', function(){})->middleware('usertype');
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'HomeController@admin');
    Route::get('/cem', 'HomeController@cem');
    Route::get('/hrio', 'HrioController@hrio');
    Route::get('/hrio_manage_clients', 'HrioController@hrio_manage_clients');
    Route::get('/hrio_reports', 'HrioController@hrio_reports');
    Route::post('/enrolment', 'EnrolmentController@enrol');
    Route::get('/manage_users', 'AdminController@manage_users');
    Route::get('/manage_clients', 'AdminController@clients');
    Route::get('/view_reports', 'AdminController@reports');
    Route::get('/search', 'SearchController@patients');
    Route::get('/eligibility', 'EnrolmentController@elig');
});
