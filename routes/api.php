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

Route::prefix('/freelancers')->group(function () {
    Route::get('/', ['uses' => 'FreelancerController@get']);
    Route::get('/{id}', ['uses' => 'FreelancerController@detail'])->where(['id' => '[0-9]+']);
    Route::post('/', ['uses' => 'FreelancerController@createFreelancer']);
    Route::put('/{id}', ['uses' => 'FreelancerController@updateFreelancer'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'FreelancerController@delete'])->where(['id' => '[0-9]+']);
});

Route::prefix('/customers')->group(function () {
    Route::get('/', ['uses' => 'CustomerController@get']);
    Route::get('/{id}', ['uses' => 'CustomerController@detail'])->where(['id' => '[0-9]+']);
    Route::post('/', ['uses' => 'CustomerController@createCustomer']);
    Route::put('/{id}', ['uses' => 'CustomerController@updateCustomer'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'CustomerController@delete'])->where(['id' => '[0-9]+']);
});

Route::prefix('/orders')->group(function () {
    Route::get('/', ['uses' => 'OrderController@get']);
    Route::get('/{id}', ['uses' => 'OrderController@detail'])->where(['id' => '[0-9]+']);
    Route::post('/', ['uses' => 'OrderController@createOrder']);
    Route::put('/{id}', ['uses' => 'OrderController@updateOrder'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'OrderController@delete'])->where(['id' => '[0-9]+']);
});

Route::prefix('/applications')->group(function () {
    Route::get('/', ['uses' => 'ApplicationController@get']);
    Route::get('/{id}', ['uses' => 'ApplicationController@detail'])->where(['id' => '[0-9]+']);
    Route::post('/', ['uses' => 'ApplicationController@createApplication']);
    Route::put('/{id}', ['uses' => 'ApplicationController@updateApplication'])->where(['id' => '[0-9]+']);
    Route::delete('/{id}', ['uses' => 'ApplicationController@delete'])->where(['id' => '[0-9]+']);
});
