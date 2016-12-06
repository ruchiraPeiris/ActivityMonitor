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

Route::get('/addActivity', function(){
   return view('addNewActivity');
});

Route::get('/admin', function(){
   return view('adminDashboard');
});

Route::post('/add_student', [
   'uses'=> 'student_controller@register',
    'as' => 'add_student'
]);
