<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RoomController;
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
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/doctor', [DoctorController::class, 'index'])
    ->name('doctor')
    ->middleware('auth');
Route::post('/doctor/create', [DoctorController::class, 'store']);
Route::post('/doctor/{id}/edit', [DoctorController::class, 'update']);
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::get('/doctor/{id}', [DoctorController::class, 'show'])->name('doctor.show');
Route::get('/doctor/{id}/edit', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::delete('/doctor/{id}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

Route::get('/patient', [PatientController::class, 'index'])
    ->name('patient')
    ->middleware('auth');
Route::post('/patient/create', [PatientController::class, 'store']);
Route::post('/patient/{id}/edit', [PatientController::class, 'update']);
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::get('/patient/{id}', [PatientController::class, 'show'])->name('patient.show');
Route::get('/patient/{id}/edit', [PatientController::class, 'edit'])->name('patient.edit');
Route::delete('/patient/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

Route::get('/room', [RoomController::class, 'index'])
    ->name('room')
    ->middleware('auth');
Route::post('/room/{id}/edit', [RoomController::class, 'update'])->name('room.update');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])
    ->name('register')
    ->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);