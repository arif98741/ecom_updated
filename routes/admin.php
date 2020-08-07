<?php

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('category', 'CategoryController')->except('show');
    Route::resource('sub-category', 'SubcategoryController')->except('show');
    Route::resource('brand', 'BrandController')->except('show');
    Route::resource('color', 'ColorController')->except('show');
    Route::resource('product', 'ProductController')->except('show');
    Route::resource('shop', 'ShopController')->except('show', 'create');
    Route::resource('customer', 'CustomerController')->except('show');
    Route::resource('order', 'OrderController')->except('show', 'create');
    Route::resource('page', 'PageController')->except('show', 'create');
});

