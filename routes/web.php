<?php

use Illuminate\Support\Facades\Route;

 

Route::get('/',[
    'uses'  => 'App\Http\Controllers\HomeController@index',
    'as'    => '/home'
]);
Route::get('ads/ads-details',[
    'uses'  => 'App\Http\Controllers\HomeController@adsDetails',
    'as'    => '/ads-details'
]);
Route::get('user/dashboard',[
    'uses'  => 'App\Http\Controllers\DashboardController@index',
    'as'    => '/dashboard'
]);
Route::get('user/user-profile',[
    'uses'  => 'App\Http\Controllers\DashboardController@userProfile',
    'as'    => '/user-profile'
]);
Route::get('ads/post-and-ads',[
    'uses'  => 'App\Http\Controllers\DashboardController@userProfile',
    'as'    => '/post-and-ads'
]);
// ========ADS section============
Route::resource('ads', App\Http\Controllers\AdsController::class);
 

// ===========user Section==========
Route::resource('user',App\Http\Controllers\UserController::class);
Route::get('my-user/register',[
    'uses'  => 'App\Http\Controllers\UserController@userRegister',
    'as'    => 'user-register'
]); Route::get('my-user/login',[
    'uses'  => 'App\Http\Controllers\UserController@userLogin',
    'as'    => 'user-login'
]); 









// =============Back-end section==============
Route::get('admin/dashboard',[
    'uses'  => 'App\Http\Controllers\BackendController@dashboard',
    'as'    => 'back-end/dashboard'
]);
Route::get('/login',[
    'uses'  => 'App\Http\Controllers\BackendController@login',
    'as'    => 'admin/login'
]);
Route::get('/register',[
    'uses'  => 'App\Http\Controllers\BackendController@register',
    'as'    => 'admin/register'
]); 
Route::resource('admin', App\Http\Controllers\AdminController::class);

 
















