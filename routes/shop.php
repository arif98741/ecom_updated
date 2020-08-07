<?php

Route::namespace('Shop')->group(function () {
    Route::get('dashboard', 'ShopController@dashboard')->name('dashboard');
    Route::resource('customer', 'CustomerController')->except('show');
    Route::resource('product', 'ProductController')->except('show');
    Route::resource('order', 'OrderController')->except('show', 'create');
    /*Route::resource('category', 'CategoryController')->except('show');
    Route::resource('sub-category', 'SubcategoryController')->except('show');
    Route::resource('brand', 'BrandController')->except('show');
    Route::resource('color', 'ColorController')->except('show');
    Route::resource('page', 'PageController')->except('show', 'create');
    */
});

