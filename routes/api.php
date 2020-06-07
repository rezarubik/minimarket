<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/master/user-management', 'UserManagementController@index')->name('master.user.management');
Route::get('/master/supplier', 'SupplierController@index')->name('master.supplier');
Route::get('/master/customer', 'CustomerController@index')->name('master.customer');
Route::get('/master/product', 'ProductController@index')->name('master.product');
