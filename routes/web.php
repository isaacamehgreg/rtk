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
    return view('welcome');
});

Auth::routes();

#user route
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/profile', 'HomeController@profile');
Route::get('/deposit', 'HomeController@deposit');
Route::get('/withdraw', 'HomeController@withdraw');
Route::post('with', 'HomeController@withdrawing');
Route::get('/upgrade', 'HomeController@upgrade');
Route::post('/buy', 'HomeController@buy');
Route::post('/sell', 'HomeController@sell');
Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

#admin Route
Route::get('/admin', 'HomeController@admin');
Route::get('/users', 'HomeController@users');
Route::get('/payments','HomeController@payments');
Route::get('/withdraws', 'HomeController@withdraws');
Route::get('update/{id}','HomeController@update');
Route::get('update/dashboard','HomeController@admin');
Route::post('update/new-balance/{id}','HomeController@new');
Route::post('update/new-level/{id}','HomeController@level');
Route::post('update/new-message/{id}','HomeController@message');
Route::post('credit/{id}/{idd}','HomeController@credit');
Route::post('message/{id}','HomeController@withdrawalmessage');
Route::post('search','HomeController@search');





/*
Route::get('log', function(){

    Auth::l

});
*/