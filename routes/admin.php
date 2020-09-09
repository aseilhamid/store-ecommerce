<?php

use Illuminate\Support\Facades\Route;


// All routes in this page has prefix -> 'admin' , set in RouteServiceProvider.php

Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function(){

        Route::get('/','DashboardController@index')->name('admin.dashboard');
});
  
Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin'], function(){

    Route::get('/login','LoginController@login')->name('admin.login');
    Route::post('/login','LoginController@postLogin')->name('admin.post.login');
});


