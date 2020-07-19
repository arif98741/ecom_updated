<?php

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('category', 'CategoryController')->except('show');
    Route::resource('sub-category', 'SubcategoryController')->except('show');
    Route::resource('product', 'ProductController')->except('show');
    Route::resource('customer', 'CustomerController')->except('show');
    Route::resource('page', 'PageController')->except('show', 'create');
});

