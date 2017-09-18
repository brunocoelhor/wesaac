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

Route::get('/', 'WelcomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home/editions', 'HomeController@editions');



// Route::get('/admin', ['middleware' => 'auth', function () {
//     return view('admin.admin');
// }]);

// Route::get('/admin', [
//     'middleware' => 'auth',
//     'uses' => 'Admin\DashboardController@home'
// ]);


//Route::get('/admin', 'Admin\DashboardController@index');


Route::get('/dashboard', 'DashboardController@index');

Route::resource('/dashboard/editions', 'EditionController');

Route::resource('/dashboard/about', 'AboutController');

Route::resource('/dashboard/intro', 'IntroController');
