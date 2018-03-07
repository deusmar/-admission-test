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

Auth::routes();

Route::get('/user/verify/{token}', 'Auth\RegisterController@verify')->name('user.verify');

Route::middleware('auth')->group(function ($route) {
    $route->get('/', function () {
        return view('home');
    });

    $route->resource('/lanes','LaneController');
});

Route::get('/mailtest', function () {
    $user = App\Models\User::find(1);
    return new App\Mail\WelcomeMail($user);
});


