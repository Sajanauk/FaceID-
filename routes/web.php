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


//load homepage
Route::get('/index', 'HomepageController@show_homepage');

//select user levels
/*
Route::get('/home',function(){
if(Auth::user()->user_level=="Admin"){
    return view('admin.adminpanel');
}elseif (Auth::user()->user_level=="Academic user") {
    return view('academicuser.academicuser_panel');
}else{
$users['users']=\App\User::all();
return view('home',$users);
}
});
*/



Route::get('/chart', 'chart@index' );
