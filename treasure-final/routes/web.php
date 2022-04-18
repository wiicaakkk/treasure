<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlaceMapController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RegisterController;

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

Route::get('/rute-satu', function () {
    return view('maps.rutewisatasatu');
});

Route::get('/register', function()
{
    return View::make('register');
});
Route::post('/register', function()
{
    var_dump($_POST);
    $validator = Validator::make(
        Input::all(),
        array(
            "username"              => "required|username",
            "name"                  => "required|name",
            "email"                 => "required|email|unique:users,email",
            "password"              => "required|min:6",
            "password_confirmation" => "same:password",
        )
      if($validator->passes())
    {
        $user = new User;
        $user->email    = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        return Redirect::to("register");
    }
    // 2b. jika tidak, kembali ke halaman form registrasi
    else
    {
        return Redirect::to('register')
            ->withErrors($validator)
            ->withInput();
    }
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/maps', [PlaceMapController::class, 'index'])->name('frontpage');
Route::get('/place/data', [DataController::class, 'places'])->name('place.data');
// DATA TABLE CONTROLLER

Route::group(['middleware' => ['auth']], function () {
    Route::resource('places', 'App\Http\Controllers\PlaceController');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
