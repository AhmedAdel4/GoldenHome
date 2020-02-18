<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// User Routes
Route::group(['namespace' => 'User'],function(){
    Route::get('/',"HomeController@Header")->name('goldenhome');


});

// Admin Routes
Route::group(['namespace' => 'Admin'], function () {
    
    Route::get('/admin','AdminController@Home')->name('admin.home');
    Route::resource('/admin/header','HeaderController');
    Route::resource('/admin/product','ProductController');
    Route::resource('/admin/about','AboutController');
    Route::resource('/admin/manager','ManagerController');
    Route::get('/admin/category','AdminController@Category')->name('admin.category');
    // Category Routes
	Route::resource('admin/category','CategoryController');
});
Auth::routes();

