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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'AdminController@index')->name('home');

// todo Admin
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

// ? start: Master
Route::group(['prefix' => 'master', 'middleware' => 'admin'], function () {
    // todo Master User Management
    Route::get('/user-management', 'UserManagementController@index')->name('master.user.management');
    Route::get('/user-management/create', 'UserManagementController@create')->name('user.management.create');
    Route::post('/user-management/store', 'UserManagementController@store')->name('user.management.store');
    Route::get('/user-management/{user}/edit', 'UserManagementController@edit')->name('user.management.edit');
    Route::patch('/user-management/{user}/edit', 'UserManagementController@update')->name('user.management.update');
    Route::delete('/user-management/{user}/delete', 'UserManagementController@destroy')->name('user.management.destroy');
    // todo Master User Role
    Route::get('/role', 'RoleController@index')->name('master.role');
    Route::get('/role/create', 'RoleController@create')->name('role.create');
    Route::post('/role/store', 'RoleController@store')->name('role.store');
    Route::get('/role/{user}/edit', 'RoleController@edit')->name('role.edit');
    Route::patch('/role/{user}/edit', 'RoleController@update')->name('role.update');
    Route::delete('/role/{user}/delete', 'RoleController@destroy')->name('role.destroy');
    // ? end: Master
});

// ? start: Customer and Product for Admin, Kasir
Route::group([
    'prefix' => 'master',
    'middleware' => ['admin', 'kasir', 'gudang',]
], function () {
    // todo Master Customer
    Route::get('/customer', 'CustomerController@index')->name('master.customer');
    Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
    Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
    Route::get('/customer/{customer}/edit', 'CustomerController@edit')->name('customer.edit');
    Route::patch('/customer/{customer}/edit', 'CustomerController@update')->name('customer.update');
    Route::delete('/customer/{customer}/delete', 'CustomerController@destroy')->name('customer.destroy');
    // todo Export Customer
    Route::get('/customer/export', 'CustomerController@exportToExcel')->name('customer.export');
    // todo Master Product
    Route::get('/product', 'ProductController@index')->name('master.product');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
    Route::patch('/product/{product}/edit', 'ProductController@update')->name('product.update');
    Route::delete('/product/{product}/delete', 'ProductController@destroy')->name('product.destroy');
    // todo Export Product
    Route::get('/product/export', 'ProductController@exportToExcel')->name('product.export');
});
// ? end: Kasir

// ? start: Supplier and Product for Admin, Gudang
Route::group([
    'prefix' => 'master',
    'middleware' => 'gudang', 'admin'
], function () {
    // todo Master Supplier
    Route::get('/supplier', 'SupplierController@index')->name('master.supplier');
    Route::get('/supplier/create', 'SupplierController@create')->name('supplier.create');
    Route::post('/supplier/store', 'SupplierController@store')->name('supplier.store');
    Route::get('/supplier/{sp}/edit', 'SupplierController@edit')->name('supplier.edit');
    Route::patch('/supplier/{sp}/edit', 'SupplierController@update')->name('supplier.update');
    Route::delete('/supplier/{sp}/delete', 'SupplierController@destroy')->name('supplier.destroy');
});
// ? end: Gudang

// Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
