<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\car_dates;

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
    $cars = car_dates::all()->random(4); //Para los 4 coches random
    return view('welcome', compact('cars'));
})->name('home');


/* Donde buscar todos los coches */
Route::get('search', function () {
    $cars = car_dates::all();
    return view('car.SearchCar', compact('cars'));
})->name('search.index');

/* Vista con el coche seleccionado */
Route::get('search/specific-car/{car}', 'Cars\SpecificViewCarController@show')->name('search.car');

/* Subida de un anuncio por el usuario */
Route::resource('add-a-car', 'Cars\UploadCarController')->only(['index', 'store', 'show'])->middleware('can:Upload a car')->names('car.cars');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->middleware('can:View Dashboard')->name('dashboard');

Auth::routes();