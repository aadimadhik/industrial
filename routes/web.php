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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'Frontend\HomesController');

Route::view('/about', 'frontend.abouts.index')->name('about');

Route::view('/blogs', 'frontend.blogs.index')->name('blogs');

Route::view('/contact-us', 'frontend.contacts.index')->name('contact');

Route::view('/services', 'frontend.services.index')->name('services');

Route::get('/admin/dashboard', 'HomeController@index')->name('admin');

Auth::routes(['register' => false]);

Route::resource('/admin/sliders', 'Admin\SlidersController');
