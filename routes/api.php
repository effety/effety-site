<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Api\PhoneRecordController;
use App\Http\Controllers\Api\CryptoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/online-users', [UserDashboardController::class, 'getOnlineUsers']);

Route::get('/patients-api', [PatientController::class, 'getPatients']);
Route::post('/cdr', [PhoneRecordController::class, 'CDR']);
Route::get('/cdr-last-record', [PhoneRecordController::class, 'getCDRArray']);
Route::get('/cdr/last-id-from-json', [PhoneRecordController::class, 'getLastIdFromJson']);
Route::get('/crypto-coins', [CryptoController::class, 'getCryptoCoins'])->name('cryptoCoins');