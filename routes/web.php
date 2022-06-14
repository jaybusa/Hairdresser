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

// Route::view('/', 'welcome');


Route::get('/', function () {

	
// 	// //send_otp_sms("966552463239",rand(1000,9999));exit;

// 	// $current_date = date('Y-m-d H:i:s');

// 	// $new_date  = date('Y-m-d H:i:s',strtotime("-30 seconds"));

// 	// echo $current_date.":".$new_date;exit;
    return view('welcome');
});

Auth::routes();
Route::get('/language/{lang}', 'LanguageController@language')->name('language');


Route::get('send_socket', 'HomeController@send_socket');
Route::post('send_socket', 'HomeController@post_send_socket')->name('post_send_socket');

Route::get('receive_socket', 'HomeController@receive_socket');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::group(['middleware' => ['guest']], function () {
	Route::get('/admin', 'LoginController@index')->name('login');
	Route::post('/admin', 'Auth\LoginController@Login')->name('login.post');
});

Route::get('/login', function () {
    return view('welcome');
});

