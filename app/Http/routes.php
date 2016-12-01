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

Route::get('/login', function(){
   return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::get('/dashboard', function(){
   return view('dashboard');
})->name('dashboard');

Route::get('/addActivity', function(){
   return view('addNewActivity');
});
