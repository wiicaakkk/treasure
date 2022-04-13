<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlaceMapController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;

use App\Models\Place;

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
    return view('layouts.main');
});

Route::get('/maps2', function () {
    return view('maps.index');
});

Route::get('/maps3', function () {
    return view('maps.map');
});

Route::get('/maps4', function () {
    return view('maps.geo');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/maps', [PlaceMapController::class, 'index'])->name('frontpage');
Route::get('/place/data', [DataController::class, 'places'])->name('place.data');
// DATA TABLE CONTROLLER

Route::group(['middleware' => ['auth']], function () {
    Route::resource('places', 'App\Http\Controllers\PlaceController');
});
