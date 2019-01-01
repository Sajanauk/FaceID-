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
//load homepage
Route::get('/index', 'HomepageController@show_homepage');

//view user login homepages
Route::get('/home', 'HomeController@index')->name('home');

//login & registration views
Auth::routes();

//view feed_tissue_data page
Route::get('/feed_tissue_data', function () {
    return view('activeuser.Feed_tissue_data');
});

// save tissue data by active user
Route::post('/save_tissue_data','Feed_tissue_data_Controller@savetissuedata');








Route::get('/chart', 'chart@index' );
