<?php

# Pages
Route::get('/', 'PagesController@home');

# Shop 
 Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@categories');
    Route::get('save-order', 'ShopController@saveOrder');
    Route::get('delete-item', 'ShopController@deleteItem');
    Route::get('update-cart', 'ShopController@updateCart');
    Route::get('cart-clear', 'ShopController@cartClear');
    Route::get('cart', 'ShopController@cart');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('{curl}', 'ShopController@products'); 
    Route::get('{curl}/{purl}', 'ShopController@item');
});

# User
Route::prefix('user')->group(function () {

    Route::get('signin', 'UserController@signin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('signup', 'UserController@signup');
    Route::post('signup', 'UserController@postSignup');
    
    Route::get('logout', 'UserController@logout');

});

#CMS
Route::middleware(['cmsguard'])->group(function () {
    Route::prefix('cms')->group(function () {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
        Route::get('orders/', 'CmsController@orders');
    });   
});

Route::get('{murl}', 'PagesController@content');