<?php

use Illuminate\Support\Facades\Route;
use Livewire\LivewireComponentsFinder;
use App\Http\Controllers\loginform;
use App\Http\Controllers\webtest;

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
//     return view('welcome');
// });


// Route::get('/hello', function () {
//     return view('hellowire');
// });

// Route::get('/form', function () {
//     return view('formwire');
// });

// Route::post('fetch', [loginform::class, 'getdata']);


// Route::get('/webpage', [webtest::class, 'index']);


Route::view('log', 'log');
// Route::post('fetch', [Usercontroller::class, 'getdata']);

// Route::get('/blog', [BladeController::class, 'blog'])->name('blog');
// Route::get('/hotel', [BladeController::class, 'hotel'])->name('hotel');


Auth::routes();

// Route::get('', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dress', [App\Http\Controllers\HomeController::class, 'dress'])->name('dress');

Route::get('/flight', [App\Http\Controllers\HomeController::class, 'flight'])->name('flight');
//Edit Flight
Route::get('/book-flight/{id}', [App\Http\Controllers\HomeController::class, 'book'])->name('book');

//Update Flight.

// Route::put('/bookflight', [App\Http\Controllers\HomeController::class, 'bookingflight'])->name('bookingflight');


Route::get('add-flight', [App\Http\Controllers\FlightController::class, 'add'])->name('add');
Route::post('flightdata', [App\Http\Controllers\FlightController::class, 'flightdata']);




Route::get('fbooking', [App\Http\Controllers\BookController::class, 'index'])->name('book');

Route::get('flight-booking', [App\Http\Controllers\BookController::class, 'book'])->name('bo');

Route::post('fetch', [App\Http\Controllers\BookController::class, 'dataget'])->name('dataget');


//view flight booking details
Route::get('/flightbooking', [App\Http\Controllers\BookController::class, 'index']);

