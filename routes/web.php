<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'AdminController@index')->name('home');

// todo Admin
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
// todo Master User Management
Route::get('/master/user-management', 'UserManagementController@index')->name('master.user.management');
Route::get('/master/user-management/create', 'UserManagementController@create')->name('user.management.create');
Route::post('/master/user-management/store', 'UserManagementController@store')->name('user.management.store');
Route::get('/master/{user}/edit', 'UserManagementController@edit')->name('user.management.edit');
Route::patch('/master/{user}/edit', 'UserManagementController@update')->name('user.management.update');
Route::delete('/master/{user}/delete', 'UserManagementController@destroy')->name('user.management.destroy');
// todo Master Supplier
Route::get('/master/supplier', 'SupplierController@index')->name('master.supplier');
Route::get('/master/supplier/create', 'SupplierController@create')->name('supplier.create');
Route::post('/master/supplier/store', 'SupplierController@store')->name('supplier.store');
Route::get('/master/{sp}/edit', 'SupplierController@edit')->name('supplier.edit');
Route::patch('/master/{sp}/edit', 'SupplierController@update')->name('supplier.update');
Route::delete('/master/{sp}/delete', 'SupplierController@destroy')->name('supplier.destroy');
// todo Master Customer
Route::get('/master/customer', 'CustomerController@index')->name('master.customer');
Route::get('/master/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/master/customer/store', 'CustomerController@store')->name('customer.store');
Route::get('/customer/{customer}/edit', 'CustomerController@edit')->name('customer.edit');
Route::patch('/customer/{customer}/edit', 'CustomerController@update')->name('customer.update');
Route::delete('/customer/{customer}/delete', 'CustomerController@destroy')->name('customer.destroy');
// todo Master Product
Route::get('/master/product', 'ProductController@index')->name('master.product');
Route::get('/master/product/create', 'ProductController@create')->name('product.create');
Route::post('/master/product/store', 'ProductController@store')->name('product.store');
Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('/product/{product}/edit', 'ProductController@update')->name('product.update');
Route::delete('/product/{product}/delete', 'ProductController@destroy')->name('product.destroy');


// Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
