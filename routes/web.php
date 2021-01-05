<?php

use Illuminate\Support\Facades\Auth;
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


Route::namespace('Auth')->group(function () {
    Route::get('/login','LoginController@show_login_form')->name('login');
    Route::post('/login','LoginController@process_login')->name('login');
    Route::get('/register','LoginController@show_signup_form')->name('register');
    Route::post('/register','LoginController@process_signup');
    Route::get('/logout','LoginController@logout')->name('logout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('is_admin');

//Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/reservation/{pack}', 'HomeController@reservationForm')->name('reservation');
Route::post('/reservation/proceed', 'HomeController@makeReservation')->name('make-reservation');


