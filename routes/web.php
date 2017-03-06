<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

Route::get('/products', 'PageController@index');

Route::get('/addProduct', 'HomeController@addProduct');

Route::get('/editproduct/{product}', 'HomeController@editproduct');

Route::get('/deleteproduct/{product}', 'HomeController@deleteproduct');

Route::get('/myAds', 'HomeController@myAds');

Route::get('/updateprofile', 'HomeController@updateprofile');

Route::get('/products/{product}','PageController@details');

Route::post('/post','productController@store');

Route::post('/products/{product}/comment','commentController@store');

Route::get('/{product}/comments','HomeController@comments');

Route::post('{product}/{comment}/reply','HomeController@reply');

Route::post('/edit/{product}','HomeController@edit');

Route::post('/delete/{product}','HomeController@delete');