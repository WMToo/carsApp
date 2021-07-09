<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
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
//     return view('index');
// });

// Route::get('/', [CarController::class, 'show']);

Route::get('/cars', [CarController::class, 'show']);

// Route::get('/', [DashboardController::class, 'index']);


Route::get('/cars/create', [CarController::class, 'create']);

Route::post('/store', [CarController::class, 'store']);

Route::get('/cars/{id}/edit', [CarController::class, 'edit']);

Route::post('/cars/{id}', [CarController::class, 'udpate']);

Route::get('/cars/{id}', [CarController::class, 'delete']);

// Route::post('/create', [
//     'uses' =>'CarController@create',
//     'as'=>'cars.create'
// ]);