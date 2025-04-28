<?php

use App\Http\Controllers\DepartamentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsumableTypeController;
use App\Http\Controllers\ConsumableVoucherController;
use App\Http\Controllers\ConsumableVoucherDetailController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EquipmentTypeController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoanDetailController;
use App\Http\Controllers\LoanHistoryController;
use App\Http\Controllers\ReturnEntryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SignerController;
use App\Http\Controllers\UserController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login'); // <-- CAMBIADO aquí
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});


Route::middleware('auth:sanctum')->group(function () {
});
Route::apiResource('roles', RoleController::class);
Route::apiResource('departments', DepartmentsController::class);
Route::apiResource('signers', SignerController::class);
Route::apiResource('consumable-vouchers', ConsumableVoucherController::class);
Route::apiResource('consumable-voucher-details', ConsumableVoucherDetailController::class);
Route::apiResource('consumable-types', ConsumableTypeController::class);
Route::apiResource('loans', LoanController::class);
Route::apiResource('loan-details', LoanDetailController::class);
Route::apiResource('equipment-types', EquipmentTypeController::class);
Route::apiResource('returns', ReturnEntryController::class);
Route::apiResource('loan-histories', LoanHistoryController::class);
Route::apiResource('users', UserController::class);