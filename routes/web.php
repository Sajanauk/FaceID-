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
use Illuminate\Http\Request;

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

Route::get('/fu', function(){
    return view('facial_feature');
} );

Route::post('process', function (Request $request) {
    $file = $request->file('photo');

    // generate a new filename. getClientOriginalExtension() for the file extension
    $filename = '12345' . "new" . '.' . $file->getClientOriginalExtension();

    // save to storage/app/photos as the new $filename
    $path = $file->storeAs('photos', $filename);

    dd($path);
});
