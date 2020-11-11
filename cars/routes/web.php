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

Route::get('/cars/all',  '\App\Http\Controllers\CarsController@getcars');
Route::post('/cars/save', '\App\Http\Controllers\CarsController@CreateCars')->name('cars.save');
Route::post('/cars/update', '\App\Http\Controllers\CarsController@UpdateCars')->name('cars.update');
Route::get('/cars/{id}/edit', '\App\Http\Controllers\CarsController@editCars')->name('cars.edit');
