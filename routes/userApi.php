<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', '\App\Http\Controllers\Api\AuthController@login');
Route::post('/registration', '\App\Http\Controllers\Api\AuthController@signUp');

Route::post('password/reset-link', '\App\Http\Controllers\Api\AuthController@sendResetLinkEmail');
Route::post('password/reset', '\App\Http\Controllers\Api\AuthController@setPassword');
Route::get('otp-validity/{otp}', '\App\Http\Controllers\Api\AuthController@checkOtp');

Route::group(['middleware' => ['auth:api', 'locale', 'permission-api']], function() {
    //User profile
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile/update', 'UserController@update');
    Route::get('/logout', '\App\Http\Controllers\Api\AuthController@logout');

    // User address
    Route::get('/addresses', 'AddressController@addresses');
    Route::post('/address/store', 'AddressController@storeAddress');
    Route::post('/address/update', 'AddressController@updateAddress');
    Route::delete('/address/delete/{id}', 'AddressController@destroyAddress');

    // User setting
    Route::post('/password/update', 'UserController@updatePassword');
    Route::delete('/account/delete', 'UserController@destroy');

    // User wishlist
    Route::get('/wishlists', 'WishlistController@index');
    Route::delete('/wishlist/delete/{id?}', 'WishlistController@destroy');
    Route::post('wishlist', 'WishlistController@store');

    // User review
    Route::get('/reviews', 'ReviewController@index');
    Route::post('/review/store', 'ReviewController@store');
    Route::post('/review/update/{id}', 'ReviewController@update')->whereNumber('id');
    Route::post('/review/delete-file', 'ReviewController@deleteFile');

    // User order
    Route::get('/orders/{id}', 'OrderController@details')->whereNumber('id');
    Route::post('orders', 'OrderController@store');

    Route::get('order-paid', 'OrderController@checkoutPayment');

    Route::post('order-get-shipping-tax', 'OrderController@getShippingTax');

    // Check Out
    Route::get('checkout', 'OrderController@checkOut')->name('siteApi.orderpaid');

    // User Wallet
    Route::get('/wallet/{id?}', 'UserController@wallet');

});

Route::group(['middleware' => ['locale']], function() {

    // Category
    Route::get('/categories/{param}', 'CategoryController@index');
    Route::get('/categories/sub-category/{parentId}', 'CategoryController@subCategory');

    // Product
    Route::get('products', 'ProductController@search');

    Route::get('/product/{slug}', 'ProductController@productDetails');

    // related products
    Route::post('/related-products', 'ProductController@relatedProducts');

    Route::get('/product-categorized/{type}', 'ProductController@categorizedProduct');

    // Top brand
    Route::get('/brand/{param}', 'BrandController@index');

    // cart
    Route::get('carts', 'CartController@index');
    Route::post('cart/store', 'CartController@store');
    Route::post('cart/reduce-qty', 'CartController@reduceQuantity');
    Route::post('cart/delete', 'CartController@destroy');
    Route::post('cart/selected-delete', 'CartController@destroySelected');
    Route::post('cart/selected-store', 'CartController@storeSelected');
    Route::post('cart/get-select-data', 'CartController@getSelected');
    Route::post('cart/all-delete', 'CartController@destroyAll');
    Route::post('cart/select-shipping', 'CartController@selectShipping');
    Route::post('cart/add-all', 'CartController@addAll');

    // check coupon
    Route::post('check-coupon', 'CartController@checkCoupon');
    Route::post('delete-coupon', 'CartController@deleteCoupon');

    // Get Stock
    Route::post('get-stock', 'CartController@getStock');

    // Seller Recommendation
    Route::get('top-seller', 'UserController@topSeller');

    // Order tracking
    Route::get('track-order/{code}', 'OrderController@trackOrder');

    // login or register by google or facebook
    Route::post('login/sso', '\App\Http\Controllers\Api\AuthController@registerOrLoginUser');

    // Recent search
    Route::get('/recent-search', 'ProductController@recentSearch');

    // Product Reviews
    Route::get('reviews/{product_id}', 'ReviewController@productReview');

    // Get all order statuses

    Route::get('orders/statuses', 'OrderStatusController@index');

    Route::get('/orders', 'OrderController@index');
});
