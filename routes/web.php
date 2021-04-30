<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConsultingRoomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\InpatientController;
use App\Http\Controllers\OutpatientController;
use App\Http\Controllers\OTController;
use App\Http\Controllers\OutpatientScheduleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EmrController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\InpatientScheduleController;
use App\Http\Controllers\radiologicontroller;
use App\Http\Controllers\radiologischedulecontroller;
use App\Http\Controllers\laboratoriumcontroller;
use App\Http\Controllers\laboratoriumschedulecontroller;
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
    
Route::get('/schedule/table', [ScheduleController::class, 'table'])
    ->name('schedule.table')
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

Route::group(['middleware' => 'auth', 'prefix' => 'nurse'], function () {
    Route::get('/', [NurseController::class, 'index'])->name('nurse');
    Route::post('/create', [NurseController::class, 'store']);
    Route::post('/{id}/edit', [NurseController::class, 'update']);
    Route::get('/create', [NurseController::class, 'create'])->name('nurse.create');
    Route::get('/{id}', [NurseController::class, 'show'])->name('nurse.show');
    Route::get('/{id}/edit', [NurseController::class, 'edit'])->name('nurse.edit');
    Route::delete('/{id}', [NurseController::class, 'destroy'])->name('nurse.destroy');
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
    Route::get('/type', [RoomController::class, 'type'])->name('room.type');
    Route::get('/ward_a', [RoomController::class, 'warda'])->name('room.ward_a');
    Route::get('/ward_b', [RoomController::class, 'wardb'])->name('room.ward_b');
    Route::get('/cost', [RoomController::class, 'getcost'])->name('room.getcost');
    Route::get('/{id}/edit', [RoomController::class, 'edit'])->name('room.edit');
    Route::post('/{id}/edit', [RoomController::class, 'update']);
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

Route::group(['middleware' => 'auth', 'prefix' => 'emr'], function () {
    Route::post('/{id}/edit', [EmrController::class, 'update']);
    Route::get('/{id}', [EmrController::class, 'show'])->name('emr.show');
    Route::get('/{id}/edit', [EmrController::class, 'edit'])->name('emr.edit');
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::group(['middleware' => 'auth'], function () {
    /* ------------------- Inpatient --------------------- */
    Route::get('/inpatient', [InpatientController::class, 'index'])->name('inpatient');
    Route::get('/inpatient/patient', [InpatientController::class, 'patient'])->name('inpatient.list');
    Route::get('/inpatient/patient/{id}', [InpatientController::class, 'show'])->name('inpatient.show');
    Route::get('/inpatient/patient/{id}/checkout', [InpatientController::class, 'checkout'])->name('inpatient.checkout');
    Route::post('/inpatient/patient/{id}/checkout/{duration_cost}/{service_cost}/{consumption_cost}/{total_cost}', [InpatientController::class, 'finish'])->name('inpatient.finish');
    Route::get('/inpatient/create', [InpatientController::class, 'create'])->name('inpatient.create');
    Route::post('/inpatient/create', [InpatientController::class, 'store']);
    Route::get('/inpatient/schedule', [InpatientScheduleController::class, 'index'])->name('inpatient.schedule');
    Route::get('/inpatient/schedule/table', [InpatientScheduleController::class, 'table'])->name('inpatient.schedule.table');
    Route::get('/inpatient/patient/{id}/orderfood', [InpatientController::class, 'orderFood'])->name('inpatient.orderfood');
    Route::post('/inpatient/patient/{id}/orderfood', [InpatientController::class, 'storeOrderFood']);

    /* ------------------- Out-patient --------------------- */
    Route::get('/outpatient', function() {
        return view('outpatient.index');
    })->name('outpatient');
    
    Route::get('/outpatient/schedule', [OutpatientScheduleController::class, 'index'])->name('outpatient.schedule');
    Route::get('/outpatient/schedule/table', [OutpatientScheduleController::class, 'table'])->name('outpatient.schedule.table');
    Route::get('/outpatient/patientlist', [OutpatientController::class, 'patient'])->name('outpatient.patientlist');
    Route::get('/outpatient/outpatient/{id}', [OutpatientController::class, 'show'])->name('outpatient.show');
    Route::get('/outpatient/create', [OutpatientController::class, 'create'])->name('outpatient.create');
    Route::post('/outpatient/create', [OutpatientController::class, 'store']);
    Route::get('/outpatient/patient/{id}/payment', [OutpatientController::class, 'payment'])->name('outpatient.payment');
    Route::post('/outpatient/patient/{id}/payment/{service_cost}/{total_cost}', [OutpatientController::class, 'finish'])->name('outpatient.finish');
    
    /* ------------------- operating_theatre --------------------- */
    
    Route::get('/operating_theatre', function() {
        return view('operating_theatre.index');
    })->name('operating');
    
    Route::get('/operating_theatre/schedule', [ScheduleController::class, 'index'])
        ->name('operating_theatre.schedule')
        ->middleware('auth');
        
    Route::get('/operating_theatre/patient', [OTController::class, 'patient'])
        ->name('operating_theatre.patient');
        
    Route::get('/operating_theatre/create', [OTController::class, 'create'])
    ->name('operating_theatre.create');
    Route::post('/operating_theatre/create', [OTController::class, 'store']);
    
    Route::get('/operating_theatre/patient/{id}', [OTController::class, 'show'])->name('operating_theatre.show');
 
    Route::post('/operating_theatre/patient/{id}/checkout/{service_cost}/{total_cost}', [OTController::class, 'finish'])->name('operating_theatre.finish');
    Route::get('/operating_theatre/patient/{id}/checkout', [OTController::class, 'checkout'])->name('operating_theatre.checkout');
    
    // // Route::get('/operating_theatre/about', function() {
    //     return view('operating_theatre.about');
    // });

    // // Route::get('/operating_theatre/dokter', function() {
    //     return view('operating_theatre.dokter');
    // });

    // // Route::get('/operating_theatre/consultation', function() {
    //     return view('operating_theatre.consultation');
    // });
    
    
    /* ------------------- Bridging --------------------- */
    
    Route::get('/api', function() {
        return view('api.api');
    });
    
    /* ------------------- Radiologi --------------------- */

    Route::get('/Radiologi', function() {
        return view('Radiologi.index');
    })->name('Radiologi');
    
    Route::get('/Radiologi/schedule', [radiologischedulecontroller::class, 'index'])->name('Radiologi.schedule');
    Route::get('/Radiologi/schedule/table', [radiologischedulecontroller::class, 'table'])->name('Radiologi.schedule.table');
    Route::get('/Radiologi/patientlist', [radiologicontroller::class, 'patient'])->name('Radiologi.radiologipatient');
    Route::get('/Radiologi/outpatient/{id}', [radiologicontroller::class, 'show'])->name('Radiologi.show');
    Route::get('/Radiologi/create', [radiologicontroller::class, 'create'])->name('Radiologi.create');
    Route::post('/Radiologi/create', [radiologicontroller::class, 'store']);
    Route::get('/Radiologi/radiologipatient/{id}/checkout', [radiologicontroller::class, 'checkout'])->name('Radiologi.checkout');
    Route::post('/Radiologi/radiologipatient/{id}/checkout/{scanning_tool}/{scanning_tool_cost}/{total_cost}', [radiologicontroller::class, 'finish'])->name('Radiologi.finish');
    
      /* ------------------- Laboratorium --------------------- */

    Route::get('/Laboratorium', function() {
        return view('Laboratorium.index');
    })->name('Laboratorium');
    
    Route::get('/Laboratorium/labschedule', [laboratoriumschedulecontroller::class, 'index'])->name('Laboratorium.schedule');
    Route::get('/Laboratorium/labschedule/table', [laboratoriumschedulecontroller::class, 'table'])->name('Laboratorium.schedule.table');
    Route::get('/Laboratorium/patientlist', [laboratoriumcontroller::class, 'patient'])->name('Laboratorium.laboratorypatient');
    Route::get('/Laboratorium/outpatient/{id}', [laboratoriumcontroller::class, 'show'])->name('Laboratorium.show');
    Route::get('/Laboratorium/create', [laboratoriumcontroller::class, 'create'])->name('Laboratorium.create');
    Route::post('/Laboratorium/create', [laboratoriumcontroller::class, 'store']);
    Route::get('/Radiologi/laboratorypatient/{id}/checkout', [laboratoriumcontroller::class, 'checkout'])->name('Laboratorium.checkout');
    Route::post('/Radiologi/laboratorypatient/{id}/checkout/{scanning_tool}/{scanning_tool_cost}/{total_cost}', [laboratoriumcontroller::class, 'finish'])->name('Laboratorium.finish');

    /* ------------------- Pharmacy --------------------- */
    Route::get('/pharmacy', function() {
        return view('pharmacy.home');
    })->name('pharmacy');

    Route::get('order', 'App\Http\Controllers\MedicineController@orderdata');
    Route::get('order/addmedicine', 'App\Http\Controllers\MedicineController@addmedicine');
    Route::post('order', 'App\Http\Controllers\MedicineController@addenter');
    Route::get('order/editmedicine/{id}', 'App\Http\Controllers\MedicineController@editmedicine');
    Route::patch('order/{id}', 'App\Http\Controllers\MedicineController@editenter');
    Route::delete('order/{id}', 'App\Http\Controllers\MedicineController@delmedicine');
    
    
    Route::get('info', 'App\Http\Controllers\InfoController@infodata');
    Route::get('info/addinfo', 'App\Http\Controllers\InfoController@addorder');
    Route::post('info', 'App\Http\Controllers\InfoController@orderenter');
    Route::delete('info/{id}', 'App\Http\Controllers\InfoController@delorder');
    
    Route::get('inforesep', 'App\Http\Controllers\ResepController@inforesep');
    Route::get('inforesep/inforesepdetails/{id}', 'App\Http\Controllers\ResepController@inforesepdetails')->name('pharmacy.inforesepdetails');
    Route::get('inforesep/addpres', 'App\Http\Controllers\ResepController@addpres')->name('pharmacy.prescribe');
    Route::post('inforesep', 'App\Http\Controllers\ResepController@presenter');
    Route::get('inforesep/editpres/{id}', 'App\Http\Controllers\ResepController@editpres');
    Route::patch('inforesep/{id}', 'App\Http\Controllers\ResepController@editpresenter');
    Route::delete('inforesep/{id}', 'App\Http\Controllers\ResepController@delpres');
    
    
    Route::get('inforan', 'App\Http\Controllers\TebusController@inforan');
    Route::get('infotebus/infotebusdetails/{id}', 'App\Http\Controllers\TebusController@infotebusdetails')->name('pharmacy.infotebusdetails');
    Route::get('infotebus/edittebus/{id}', 'App\Http\Controllers\TebusController@edittebus');
    Route::patch('inforan/{id}', 'App\Http\Controllers\TebusController@edittebusenter');
    Route::delete('inforan/{id}', 'App\Http\Controllers\TebusController@deltebus');
});







