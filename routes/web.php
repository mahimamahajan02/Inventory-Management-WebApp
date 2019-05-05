<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/items', 'ItemController@index'); //List of items

Route::get('/items/new', 'ItemController@create'); //Add new items form

Route::post('/items/store', 'ItemController@store'); //Insert new item query

Route::get('/items/{id}/edit', 'ItemController@edit'); //Edit item form

Route::patch('/items/{id}/update', 'ItemController@update'); //Update item query

Route::delete('/items/{id}/delete', 'ItemController@delete'); //Delete item


// Suppliers=====================================
Route::get('/suppliers', 'SupplierController@index'); //List of suppliers

Route::get('/suppliers/new', 'SupplierController@create'); //Add new suppliers form

Route::post('/suppliers/store', 'SupplierController@store'); //Insert new supplier query

Route::get('/suppliers/{id}/edit', 'SupplierController@edit'); //Edit supplier form

Route::patch('/suppliers/{id}/update', 'SupplierController@update'); //Update supplier query

Route::delete('/suppliers/{id}/delete', 'SupplierController@delete'); //Delete supplier


// Customers=====================================
Route::get('/customers', 'CustomerController@index'); //List of customers

Route::get('/customers/new', 'CustomerController@create'); //Add new customers form

Route::post('/customers/store', 'CustomerController@store'); //Insert new customer query

Route::get('/customers/{id}/edit', 'CustomerController@edit'); //Edit customer form

Route::patch('/customers/{id}/update', 'CustomerController@update'); //Update customer query

Route::delete('/customers/{id}/delete', 'CustomerController@delete'); //Delete customer


// Checkin=====================================

Route::get('/checkin', 'CheckinController@index'); //List of checkins

Route::get('/checkin/new', 'CheckinController@create'); //Add new checkins form

Route::post('/checkin/store', 'CheckinController@store'); //Insert new checkin query

Route::get('/checkin/{id}/edit', 'CheckinController@edit'); //Edit checkin form

Route::patch('/checkin/{id}/update', 'CheckinController@update'); //Update checkin query

Route::delete('/checkin/{id}/delete', 'CheckinController@delete'); //Delete checkin

// Checkout=====================================
Route::get('/checkout', 'CheckoutController@index'); //List of checkouts

Route::get('/checkout/new', 'CheckoutController@create'); //Add new checkouts form

Route::post('/checkout/store', 'CheckoutController@store'); //Insert new checkout query

Route::get('/checkout/{id}/edit', 'CheckoutController@edit'); //Edit checkout form

Route::patch('/checkout/{id}/update', 'CheckoutController@update'); //Update checkout query

Route::delete('/checkout/{id}/delete', 'checkoutController@delete'); //Delete checkout

// Settings - Locations========================================




 Route::get('/settings/locations', 'LocationController@index'); //List of locations

 Route::get('/settings/locations/new', 'LocationController@create'); //Add new locations form

 Route::post('/settings/locations/store', 'LocationController@store'); //Insert new location query

 Route::get('/settings/locations/{id}/edit', 'LocationController@edit'); //Edit location form

 Route::patch('/settings/locations/{id}/update', 'LocationController@update'); //Update location query

 Route::delete('/settings/locations/{id}/delete', 'LocationController@delete'); //Delete location




// Settings - Units========================================

Route::get('/settings/units', 'UnitController@index'); //List of units

Route::get('/settings/units/new', 'UnitController@create'); //Add new units form

Route::post('/settings/units/store', 'UnitController@store'); //Insert new unit query

Route::get('/settings/units/{id}/edit', 'UnitController@edit'); //Edit unit form

Route::patch('/settings/units/{id}/update', 'UnitController@update'); //Update unit query

 Route::delete('/settings/units/{id}/delete', 'UnitController@delete'); //Delete unit


// Settings - Currency========================================
Route::get('/settings/currency', 'CurrencyController@index'); //List of currency

Route::get('/settings/currency/new', 'CurrencyController@create'); //Add new currency form

Route::post('/settings/currency/store', 'CurrencyController@store'); //Insert new currency query

Route::get('/settings/currency/{id}/edit', 'CurrencyController@edit'); //Edit currency form

Route::patch('/settings/currency/{id}/update', 'CurrencyController@update'); //Update currency query

 Route::delete('/settings/currency/{id}/delete', 'CurrencyController@delete'); //Delete currency



// Settings - Category========================================

Route::get('/settings/category', 'CategoryController@index'); //List of category

Route::get('/settings/category/new', 'CategoryController@create'); //Add new category form

Route::post('/settings/category/store', 'CategoryController@store'); //Insert new category query

Route::get('/settings/category/{id}/edit', 'CategoryController@edit'); //Edit category form

Route::patch('/settings/category/{id}/update', 'CategoryController@update'); //Update category query

 Route::delete('/settings/category/{id}/delete', 'CategoryController@delete'); //Delete category


// ============================================
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
