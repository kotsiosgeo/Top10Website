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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'UserController@profile');

Route::resource('/destinations', 'DestinationController');

Route::get('suggest', 'UserController@show_suggest');

Route::post('profile', 'UserController@update_avatar');

Route::get('details', 'UserController@show_details');

Route::get('/cities/nicosia', 'CityController@show_nicosia');

Route::get('/cities/limassol', 'CityController@show_limassol');

Route::get('/cities/paphos', 'CityController@show_paphos');

Route::get('/cities/larnaca', 'CityController@show_larnaca');

Route::get('/activities/paphosrestaurants', 'ActivityController@show_paphosresaurants');

Route::get('/activities/paphosclubs', 'ActivityController@show_paphosclubs');

Route::get('/activities/paphosmuseums', 'ActivityController@show_paphosmuseums');

Route::get('/activities/paphossightseeing', 'ActivityController@show_paphossightseeing');

Route::get('/activities/nicosiarestaurants', 'ActivityController@show_nicosiaresaurants');

Route::get('/activities/nicosiaclubs', 'ActivityController@show_nicosiaclubs');

Route::get('/activities/nicosiamuseums', 'ActivityController@show_nicosiamuseums');

Route::get('/activities/nicosiasightseeing', 'ActivityController@show_nicosiasightseeing');

Route::get('/activities/limassolrestaurants', 'ActivityController@show_limassolresaurants');

Route::get('/activities/limassolclubs', 'ActivityController@show_limassolclubs');

Route::get('/activities/limassolmuseums', 'ActivityController@show_limassolmuseums');

Route::get('/activities/limassolsightseeing', 'ActivityController@show_limassolsightseeing');

Route::get('/activities/larnacarestaurants', 'ActivityController@show_larnacaresaurants');

Route::get('/activities/larnacaclubs', 'ActivityController@show_larnacaclubs');

Route::get('/activities/larnacamuseums', 'ActivityController@show_larnacamuseums');

Route::get('/activities/larnacasightseeing', 'ActivityController@show_larnacasightseeing');
