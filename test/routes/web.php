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
    // return view('welcome');
    if(Auth::user()){
        return redirect('/home');
    }
    return view('auth.login');
});

Route::resource('users','UserController');


//Route::post('/store','UsersController@store');

Auth::routes();

 Route::get('/home', 'UserController@index');
