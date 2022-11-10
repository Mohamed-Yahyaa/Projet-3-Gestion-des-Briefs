<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BriefsController;
use App\Http\Controllers\TachesController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\AssingerController;

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

Route::resource('/briefs', BriefsController::class);

Route::resource('/taches', TachesController::class);

