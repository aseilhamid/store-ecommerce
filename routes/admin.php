<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...


    Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function(){

        Route::get('/','DashboardController@index')->name('admin.dashboard');

        Route::group(['prefix' => 'settings'], function(){
        Route::get('shipping-methods/{type}','SettingController@editShippingMethods')->name('edit.shipping.methods');
        Route::put('shipping-methods/{id}','SettingController@updateShippingMethods')->name('update.shipping.methods');
    });
});
});


  
Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin',  'middleware' => 'guest:admin'], function(){

    Route::get('/login','LoginController@login')->name('admin.login');
    Route::post('/login','LoginController@postLogin')->name('admin.post.login');
});


