<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EMRSController;
use App\Http\Controllers\API\ReceiptsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    // EMRS Routes
    Route::post('/EMRS/create', [EMRSController::class,'create']); 
    Route::get('/EMRS/edit/{id}', [EMRSController::class,'edit']); 
    Route::post('/EMRS/edit/{id}', [EMRSController::class,'update']); 
    Route::get('/EMRS/delete/{id}', [EMRSController::class,'delete']); 

    // Receipts Routes
    Route::post('/Receipts/create', [ReceiptsController::class,'create']); 
    Route::get('/Receipts/edit/{id}', [ReceiptsController::class,'edit']); 
    Route::post('/Receipts/edit/{id}', [ReceiptsController::class,'update']); 
    Route::get('/Receipts/delete/{id}', [ReceiptsController::class,'delete']); 
    
    Route::get('/logout', [AuthController::class,'logout']); 

});


Route::post('/login', [AuthController::class,'login']);

