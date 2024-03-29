<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SeriesController;
use App\http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listarSeries', [SeriesController::class, 'listarSeries']);

Route::get('/home', HomeController::class);
