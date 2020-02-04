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

Route::prefix('/')->group(function () {
  Route::get('', function () {return view('general/landing');});
  // Route::get('inventory', function () {return view('general/inventory');});
  Route::get('inventory', 'pageController@inventory');
  Route::get('services', function () {return view('general/services');});
  Route::get('contact', 'pageController@contact');
  Route::get('about', function () {return view('general/about');});
});
