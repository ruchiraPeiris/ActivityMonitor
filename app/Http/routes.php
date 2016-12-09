<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', [
    'uses' => 'student_controller@getLogin',
    'as' => 'login'
]);

Route::post('/login', [
    'uses' => 'student_controller@postLogin',
    'as' => 'login'
]);

Route::get('/register', [
    'uses' => 'student_controller@getRegister',
    'as' => 'register'
]);

Route::get('/dashboard', [
    'uses' => 'student_controller@getDashboard',
    'middleware' => 'auth',
    'as' => 'dashboard'
]);

Route::get('/logout', [
    'uses' => 'student_controller@getLogout',
    'as' => 'logout'
]);

Route::get('/addActivity', [
    'uses' => 'student_controller@getAddActivity',
    'middleware' => 'auth',
    'as' => 'addActivity'
]);

Route::get('/admin', function(){
   return view('adminDashboard');
});

Route::post('/add_student', [
   'uses'=> 'student_controller@register',
    'as' => 'add_student'
]);

Route::get('/editProfile', [
    'uses' => 'student_controller@getEditProfile',
    'middleware' => 'auth',
    'as' => 'editProfile'
]);

Route::post('/changeData', [
    'uses' => 'student_controller@changeData',
    'middleware' => 'auth',
    'as' => 'changeData'
]);

Route::post('/editPassword', [
    'uses' => 'student_controller@editPassword',
    'middleware' => 'auth',
    'as' => 'editPassword'
]);

Route::get('/dropdown', function(){
    $cat_id = \Illuminate\Support\Facades\Input::get('cat_id');
    $modules = \App\module::where('cat_id', $cat_id)->get();
    return Response::json($modules);
});

Route::post('/addActivity', [
    'uses' => 'student_controller@postAddActivity',
    'as' => 'postAddActivity'
]);