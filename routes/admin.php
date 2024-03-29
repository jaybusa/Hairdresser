<?php

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('orders', 'OrdersController@orders')->name('orders');
	Route::get('orders/{id}', 'OrdersController@orders')->name('orders_categories');
	Route::get('order_detail/{id}','OrdersController@order_detail')->name('order_detail');
	Route::get('customer', 'CustomerController@customer')->name('customer');
	Route::get('customer/detail/{id}', 'CustomerController@detail')->name('customer_detail');

	Route::post('customer/change_status', 'CustomerController@change_status')->name('customer_change_status');
	Route::get('hairdresser', 'HairdresserController@hairdresser')->name('hairdresser');
	Route::get('withdrawal_requests', 'HairdresserController@withdrawal_requests')->name('withdrawal_requests');
	Route::get('hairdresser/detail/{id}', 'HairdresserController@detail')->name('hairdresser_detail');
	Route::post('hairdresser/change_status', 'HairdresserController@change_status')->name('hairdresser_change_status');
	
	Route::post('save-wallet-record', 'HairdresserController@save_wallet_record')->name('save_wallet_record');


	Route::get('parent_category', 'ParentCategoryController@parent_category')->name('parent_category');
	Route::post('parent_category', 'ParentCategoryController@post_parent_category')->name('post_parent_category');
	Route::post('delete_parent_category', 'ParentCategoryController@delete_parent_category')->name('delete_parent_category');

	Route::get('promocode', 'PromocodeController@promocode')->name('promocode');
	Route::post('promocode', 'PromocodeController@post_promocode')->name('post_promocode');
	Route::post('delete_promocode', 'PromocodeController@delete_promocode')->name('delete_promocode');
	Route::post('check-promocode','PromocodeController@check_promocode')->name('check_promocode');

	Route::get('/downloadPDF','ReportController@downloadPDF');

	Route::get('report', 'ReportController@index')->name('report');
	Route::post('report', 'ReportController@index')->name('report');
	Route::get('amount_report', 'ReportController@amount_report')->name('amount_report');
// 	Route::post('get-report', 'ReportController@show')->name('get_report');
	
	Route::get('banner', 'BannerController@banner')->name('banner');
	Route::post('banner', 'BannerController@post_banner')->name('post_banner');
	Route::post('delete_banner', 'BannerController@delete_banner')->name('delete_banner');


	Route::get('category', 'CategoryController@category')->name('category');
	Route::post('category', 'CategoryController@post_category')->name('post_category');
	Route::post('delete_category', 'CategoryController@delete_category')->name('delete_category');

	Route::get('settings', 'SettingsController@settings')->name('settings');
	Route::post('settings', 'SettingsController@post_settings')->name('post_settings');
	Route::post('check-parent-category','ParentCategoryController@check_parent_category');
	Route::post('check-category','CategoryController@check_category');


});