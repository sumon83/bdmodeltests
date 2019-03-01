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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/model_tests', 'PagesController@model_tests');
Route::get('/teachers', 'PagesController@teachers');
Route::get('/students', 'PagesController@students');
Route::get('/blogs', 'PagesController@blogs');
Route::get('/contact_us', 'PagesController@contact_us');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'RegistrationController@login');
Route::get('/sign_up', 'RegistrationController@sign_up');
//Route::get('/services', 'PagesController@services');


Route::post('/registrar', 'RegistrationController@registrar');
//Route::get('/services', 'PagesController@services');


Route::resource('posts', 'PostsController');
