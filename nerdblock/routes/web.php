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
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/employee', function () {
    return view('employee.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/shop', 'BlocksController@index');
Route::get('/shop/{block}', 'BlocksController@show');

Route::get('/view-products', 'EditProductsController@index');
Route::get('/view-products/new', 'EditProductsController@create');
Route::post('/view-products/new', 'EditProductsController@store');
Route::get('/edit/{item}', 'EditProductsController@edit');
Route::put('/edit/{id}', 'EditProductsController@update');

Route::get('/view-orders', 'ShipmentController@index');
Route::get('/view-orders/{shipment}', 'ShipmentController@show');
Route::put('/view-orders/{shipment}', 'ShipmentController@update');


Route::get('/update-customer-profile', 'EditCustomerProfilesController@index');
Route::get('/update-customer-profile/{user}', 'EditCustomerProfilesController@show');
Route::put('/update-customer-profile/{user}', 'EditCustomerProfilesController@update');

Route::get('/view-employees', 'EmployeeController@index');
Route::get('/view-employees/{employeeid}', 'EmployeeController@show');
Route::put('/view-employees/{shipment}', 'EmployeeController@update');
Route::get('/create-employee/new', 'EmployeeController@create');
Route::post('/create-employee/new', 'EmployeeController@store');

Route::get('/account/subscriptions', 'CustomerSubscriptionController@index');
Route::get('/account/subscriptions/{customerSubscription}', 'CustomerSubscriptionController@show');
Route::put('/account/subscriptions/{customerSubscription}', 'CustomerSubscriptionController@update');

Route::get('/reports', 'ReportsController@index');

Route::get('/account/personal-information', 'UserController@index');
Route::put('/account/personal-information', 'UserController@update');

Route::get('/view-shipments', 'StoreShipmentController@index');

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/cart', 'CartController@index');
Route::get('/cart/{id}', 'CartController@edit');
Route::put('/cart/{row}', 'CartController@destroy');

Route::get('/shipping', 'ShippingController@index');
Route::post('/shipping', 'ShippingController@store');
