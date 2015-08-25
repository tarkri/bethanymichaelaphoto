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

//HOMEPAGE
Route::get('/', 'PagesController@index');
//ABOUT PAGE
Route::get('about', 'PagesController@about');
//CASE STUDIES
Route::get('case-studies', 'PagesController@caseStudies');
//ARTICLES
Route::get('articles', 'PagesController@articles');
//WEDDINGS
Route::get('weddings', 'PagesController@weddings');
//PORTRAITS
Route::get('portraits', 'PagesController@portraits');
//DESTINATIONS
Route::get('destinations', 'PagesController@destinations');
//START YOUR ADVENTURE
Route::get('start', 'StartController@index');


//ADMIN LOGIN
Route::get('admin', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
