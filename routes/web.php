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

Route::get('/about', 'ForntController@about')->name('about');
Route::get('/laws', 'ForntController@laws')->name('laws');
Route::get('/licence', 'ForntController@licence')->name('licence');
Route::get('/track', 'ForntController@track')->name('track');
Route::post('/track', 'ForntController@search')->name('track.search');
Route::get('/bank/{id}', 'ForntController@bank')->name('track.bank');
Route::post('/bank', 'ForntController@bankPaymet')->name('track.bankPaymet');
Route::post('/licence/store', 'ForntController@store')->name('licence.store');
Route::get('/licence/confirm', 'ForntController@confirm')->name('confirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin','namespace' => 'Admin', 'middleware' => 'auth'], function() {
    
    Route::get('/', 'UserController@dashboard')->name('dashboard');
    // User Route .
    Route::group(['prefix' => "users"], function() {
        Route::get('/','UserController@index')->name('user.index');
        Route::get('/create','UserController@create')->name('user.create');
        Route::get('/print','UserController@print')->name('user.print');
        Route::post('/store','UserController@store')->name('user.store');
        Route::get('/edit/{id}','UserController@edit')->name('user.edit');
        Route::post('/update','UserController@update')->name('user.update');
        Route::get('/delete/{id}','UserController@delete')->name('user.delete');
    });

    // Purpose Route .
    Route::group(['prefix' => "purposes"], function() {
        Route::get('/','PurposeController@index')->name('purpose.index');
        Route::get('/create','PurposeController@create')->name('purpose.create');
        Route::post('/store','PurposeController@store')->name('purpose.store');
        Route::get('/edit/{id}','PurposeController@edit')->name('purpose.edit');
        Route::post('/update','PurposeController@update')->name('purpose.update');
        Route::get('/delete/{id}','PurposeController@delete')->name('purpose.delete');
    });

    // Areas Route .
    Route::group(['prefix' => "area"], function() {
        Route::get('/','AreaController@index')->name('area.index');
        Route::get('/create','AreaController@create')->name('area.create');
        Route::get('/print','AreaController@print')->name('area.print');
        Route::post('/store','AreaController@store')->name('area.store');
        Route::get('/edit/{id}','AreaController@edit')->name('area.edit');
        Route::post('/update','AreaController@update')->name('area.update');
        Route::get('/delete/{id}','AreaController@destroy')->name('area.delete');
    });

    // District Route .
    Route::group(['prefix' => "district"], function() {
        Route::get('/{id}','DistrictController@index')->name('district.index');
        Route::get('/print/{id}','DistrictController@print')->name('district.print');
        Route::get('/create/{id}','DistrictController@create')->name('district.create');
        Route::post('/store','DistrictController@store')->name('district.store');
        Route::get('/edit/{id}','DistrictController@edit')->name('district.edit');
        Route::post('/update','DistrictController@update')->name('district.update');
        Route::get('/delete/{id}','DistrictController@destroy')->name('district.delete');
    });

    // licence Route .
    Route::group(['prefix' => "licence"], function() {
        Route::get('/','LicenceController@index')->name('licence.index');
        Route::get('/create','LicenceController@create')->name('licence.create');
        Route::get('/report','LicenceController@report')->name('licence.report');
        Route::get('/pass','LicenceController@pass')->name('licence.pass');
        Route::get('/toEng/{id}','LicenceController@toEng')->name('licence.toEng');
        Route::post('/toEng','LicenceController@toEngStore')->name('licence.toEngStore');
        Route::get('/manage/{id}','LicenceController@manage')->name('licence.manage');
        Route::get('/bank/{id}','LicenceController@bank')->name('licence.bank');
        Route::post('/bank','LicenceController@bankPaymet')->name('licence.bankPaymet');
        Route::post('/update','LicenceController@update')->name('licence.update');
        Route::get('/delete','LicenceController@destroy')->name('licence.delete');
    });

    // report Route .
    Route::group(['prefix' => "report"], function() {
        Route::get('/create/{id}','ReportController@create')->name('report.create');
        Route::get('/toEng/{id}','ReportController@toEng')->name('report.toEng');
        Route::post('/store','ReportController@store')->name('report.store');
        Route::get('/manage/{id}','ReportController@manage')->name('report.manage');
        Route::post('/update','ReportController@update')->name('report.update');
        Route::get('/delete','ReportController@destroy')->name('report.delete');
    });

    // Area Caluclating Route .
    Route::group(['prefix' => "area_calculate"], function() {
        Route::get('/create/{id}','AreaCaluclateController@create')->name('area_calculate.create');
        Route::get('/toEng/{id}','AreaCaluclateController@toEng')->name('area_calculate.toEng');
        Route::post('/store','AreaCaluclateController@store')->name('area_calculate.store');
        Route::get('/manage/{id}','AreaCaluclateController@manage')->name('area_calculate.manage');
        Route::post('/update','AreaCaluclateController@update')->name('area_calculate.update');
        Route::get('/delete','AreaCaluclateController@destroy')->name('area_calculate.delete');
    });

    // Area Caluclating Route .
    Route::group(['prefix' => "print"], function() {
        Route::get('/payment-oder/{id}','PrintController@payment_order')->name('print.pay');
        Route::get('/toEng/{id}','PrintController@toEng')->name('print.toEng');
        Route::post('/store','PrintController@store')->name('print.store');
        Route::get('/manage/{id}','PrintController@manage')->name('print.manage');
        Route::post('/update','PrintController@update')->name('print.update');
        Route::get('/delete','PrintController@destroy')->name('print.delete');
    });

    // Area Caluclating Route .
    Route::group(['prefix' => "payment"], function() {
        Route::get('/','PaymentController@index')->name('payment.index');
    });




});