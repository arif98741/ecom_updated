<?php


Route::namespace('API')->group(function () {


//    Route::prefix('product')->group(function () {
//        Route::post('/single_food', 'RestaurantController@singleFood');
//    });


    Route::prefix('category')->group(function () {
        Route::post('/single_sub_category', 'CategoryController@singleSubCategory');
    });



});
