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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('/freelancers')->group(function () {
    Route::get('/', ['uses' => 'FreelancerController@get']);
    Route::get('/{id}', ['uses' => 'FreelancerController@detail'])->where(['name' => '[0-9]+']);
    Route::post('/', ['uses' => 'FreelancerController@create']);
    Route::put('/{id}', ['uses' => 'FreelancerController@update'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'FreelancerController@delete'])->where(['id' => '[0-9]+']);
});

Route::prefix('/customers')->group(function () {
    Route::get('/', ['uses' => 'CustomerController@get']);
    Route::get('/{id}', ['uses' => 'CustomerController@detail'])->where(['name' => '[0-9]+']);
    Route::post('/', ['uses' => 'CustomerController@create']);
    Route::put('/{id}', ['uses' => 'CustomerController@update'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'CustomerController@delete'])->where(['id' => '[0-9]+']);
});

Route::prefix('/orders')->group(function () {
    Route::get('/', ['uses' => 'OrderController@get']);
    Route::get('/{id}', ['uses' => 'OrderController@detail'])->where(['name' => '[0-9]+']);
    Route::post('/', ['uses' => 'OrderController@create']);
    Route::put('/{id}', ['uses' => 'OrderController@update'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'OrderController@delete'])->where(['id' => '[0-9]+']);
});

Route::prefix('/applications')->group(function () {
    Route::get('/', ['uses' => 'ApplicationController@get']);
    Route::get('/{id}', ['uses' => 'ApplicationController@detail'])->where(['name' => '[0-9]+']);
    Route::post('/', ['uses' => 'ApplicationController@create']);
    Route::put('/{id}', ['uses' => 'ApplicationController@update'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'ApplicationController@delete'])->where(['id' => '[0-9]+']);
});
