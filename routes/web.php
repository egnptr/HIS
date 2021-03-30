<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConsultingRoomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\InpatientController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ScheduleController;
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

Route::get('/facility', [FacilityController::class, 'index'])
    ->name('facility')
    ->middleware('auth');

Route::get('/schedule', [ScheduleController::class, 'index'])
    ->name('schedule')
    ->middleware('auth');

Route::group(['middleware' => 'auth', 'prefix' => 'doctor'], function () {
    Route::get('/', [DoctorController::class, 'index'])->name('doctor');
    Route::post('/create', [DoctorController::class, 'store']);
    Route::post('/{id}/edit', [DoctorController::class, 'update']);
    Route::get('/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::get('/{id}', [DoctorController::class, 'show'])->name('doctor.show');
    Route::get('/{id}/edit', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::delete('/{id}', [DoctorController::class, 'destroy'])->name('doctor.destroy');
});

Route::group(['middleware' => 'auth', 'prefix' => 'patient'], function () {
    Route::get('/', [PatientController::class, 'index'])->name('patient');
    Route::post('/create', [PatientController::class, 'store']);
    Route::post('/{id}/edit', [PatientController::class, 'update']);
    Route::get('/create', [PatientController::class, 'create'])->name('patient.create');
    Route::get('/{id}', [PatientController::class, 'show'])->name('patient.show');
    Route::get('/{id}/edit', [PatientController::class, 'edit'])->name('patient.edit');
    Route::delete('/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');
});

Route::group(['middleware' => 'auth', 'prefix' => 'room'], function () {
    Route::get('/', [RoomController::class, 'index'])->name('room');
    Route::get('/cost', [RoomController::class, 'getcost'])->name('room.getcost');
    Route::post('/{id}/edit', [RoomController::class, 'update'])->name('room.update');
});

Route::group(['middleware' => 'auth', 'prefix' => 'consulting'], function () {
    Route::get('/', [ConsultingRoomController::class, 'index'])->name('consulting');
    Route::get('/{id}/edit', [ConsultingRoomController::class, 'edit'])->name('consulting.edit');
    Route::post('/{id}/edit', [ConsultingRoomController::class, 'update']);
});

Route::group(['middleware' => 'auth', 'prefix' => 'receipt'], function () {
    Route::get('/', [ReceiptController::class, 'index'])->name('receipt');
    Route::post('/create', [ReceiptController::class, 'store']);
    Route::post('/{id}/edit', [ReceiptController::class, 'update']);
    Route::get('/create', [ReceiptController::class, 'create'])->name('receipt.create');
    Route::get('/{id}', [ReceiptController::class, 'show'])->name('receipt.show');
    Route::get('/{id}/edit', [ReceiptController::class, 'edit'])->name('receipt.edit');
    Route::delete('/{id}', [ReceiptController::class, 'destroy'])->name('receipt.destroy');
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::group(['middleware' => 'auth'], function () {
    /* ------------------- Inpatient --------------------- */
    Route::get('/inpatient', [InpatientController::class, 'index'])
    ->name('homeInpatient');
    Route::get('/inpatient/dashboard', [InpatientController::class, 'dashboard'])
    ->name('inpatientPatient');

    /* ------------------- Out-patient --------------------- */
    Route::get('/outpatient', function() {
        return view('outpatient.welcome');
    })->name('outpatient');

    Route::get('/outpatient/referral', function() {
        return view('inpatient.referral');
    });

    /* ------------------- operating_theatre --------------------- */
    Route::get('/operating_theatre', function() {
        return view('operating_theatre.index');
    })->name('operating');

    Route::get('/operating_theatre/about', function() {
        return view('operating_theatre.about');
    });

    Route::get('/operating_theatre/dokter', function() {
        return view('operating_theatre.dokter');
    });

    Route::get('/operating_theatre/consultation', function() {
        return view('operating_theatre.consultation');
    });

    /* ------------------- Bridging --------------------- */

    Route::get('/api', function() {
        return view('api.home');
    })->name('api');

    Route::get('/api/page', function() {
        return view('api.apipage');
    });

    /* ------------------- Laboratory --------------------- */

    Route::get('/radiologi_lab', function () {
        return view('radiologi_lab.home1');
    })->name('radiologilab');

    Route::get('/radiologi_lab/form', function () {
        return view('radiologi_lab.form');
    });

    Route::get('/radiologi_lab/formradiologi', function () {
        return view('radiologi_lab.formradiologi');
    });

    Route::get('/radiologi_lab/formlab', function () {
        return view('radiologi_lab.formlab');
    });
    
    Route::get('/radiologi_lab/paylab', function () {
    return view('radiologi_lab.paylab');
    });

    Route::get('/radiologi_lab/ambil', function () {
    return view('radiologi_lab.ambil');
    });
    
    Route::get('/radiologi_lab/layanan', function () {
    return view('radiologi_lab.layanan');
    });
    
    /* ------------------- Pharmacy --------------------- */
    Route::get('/pharmacy', function() {
        return view('pharmacy.home');
    })->name('pharmacy');
    
    Route::get('order', 'App\Http\Controllers\MedicineController@orderdata');
    
    Route::get('order/addmedicine', 'App\Http\Controllers\MedicineController@addmedicine');
});



        
    


    