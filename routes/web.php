<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegistrationController;
use App\Http\Controllers\Frontend\MusicianHomepageController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\MusicianController;
use App\Http\Controllers\backend\PadcenterController;

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


//---Frontend---

Route::get('/', function () {
    return view('frontend.homepage');
});

Route::get('/login-form', [LoginController::class, 'login'])->name('login.form');

Route::get('/registration-form', [RegistrationController::class, 'registration'])->name('registration.form');
Route::get('/musician/homepage', [MusicianHomepageController::class, 'index'])->name('musician.homepage');
Route::get('Booking', [BookingController::class, 'booking'])->name('booking.form');

// ---Backend---

Route::get('/admin', [AdminController::class, 'Admin'])->name('adminpanel');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/musician', [MusicianController::class, 'musicians'])->name('musicians');
Route::get('/musician-form', [MusicianController::class, 'form'])->name('musician.form');
Route::post('/musician-form/store',[MusicianController::class,'store'])->name('musician.form.store');


Route::get('/padcenter', [PadcenterController::class, 'padcenter'])->name('padcenter');
Route::get('/padcenter-form',[PadcenterController::class,'list'])->name('padcenter-form');
Route::post('padcenter/store', [PadcenterController::class, 'store'])->name('padcenter.store');
