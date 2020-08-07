<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/admin', function () {
    return redirect('admin/login');
});

Route::get('/shop', function () {
    return redirect('shop/login');
});


Route::get('/customer_temp', function () {
    return redirect('customer_temp/login');
});

Auth::routes();


//Front Routes
Route::namespace('Front')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    /*Route::get('/', 'HomeController@index')->name('home');
    Route::get('/restaurants', 'RestaurantController@index');
    Route::get('/restaurant/view/{slug}', 'RestaurantController@viewBySlug');
    Route::match(['get', 'post'], '/restaurant/comment', 'RestaurantController@restaurant_comment');
    Route::match(['get', 'post'], '/food/comment', 'FoodController@food_comment');
    Route::get('/places/', 'PlaceController@index');
    Route::get('/place/{slug}', 'PlaceController@viewBySlug');
    Route::get('/foods', 'FoodController@index');
    Route::get('/food/{restaurant}/{slug}', 'FoodController@viewBySlug');
    Route::get('/page/{slug}', 'PageController@viewBySlug');
    Route::get('/team-members', 'PageController@teamMembers');
    Route::get('/offers', 'OfferController@index');
    Route::get('/search', 'SearchController@index')->name('search');
    //SiteMap Generate
    Route::get('sitemap', 'HomeController@siteMap');
    */

});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Admin\Auth\LoginController@login');
    Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');

    Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Admin\Auth\RegisterController@register');

    Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'customer_temp'], function () {
    Route::get('/login', 'Customer\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Customer\Auth\LoginController@login');
    Route::post('/logout', 'Customer\Auth\LoginController@logout')->name('logout');

    Route::get('/register', 'Customer\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Customer\Auth\RegisterController@register');

    Route::post('/password/email', 'Customer\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'Customer\Auth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'Customer\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'Customer\Auth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'shop'], function () {
    Route::get('/login', 'Shop\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Shop\Auth\LoginController@login');
    Route::post('/logout', 'Shop\Auth\LoginController@logout')->name('logout');

    Route::get('/register', 'Shop\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Shop\Auth\RegisterController@register');

    Route::post('/password/email', 'Shop\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'Shop\Auth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'Shop\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'Shop\Auth\ResetPasswordController@showResetForm');
});
