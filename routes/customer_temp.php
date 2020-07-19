<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer_temp')->user();

    //dd($users);

    return view('customer_temp.home');
})->name('home');

