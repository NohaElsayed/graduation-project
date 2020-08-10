<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    return view('index.front');
});



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
   
 
    Route::resource('joblist','joblistController');    
    Route::resource('jobsgallary','jobsgallaryController');
    Route::resource('jobsgallary','jobsgallaryController');
    Route::get('about', 'joblistController@about')->name('about');
    Route::get('servies', 'joblistController@servies')->name('servies');
    Route::resource('contact','contactController');
});

    


Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/redirect/{service}', 'SocialController@redirect');

// Route::get('/callback/{service}', 'SocialController@callback');

