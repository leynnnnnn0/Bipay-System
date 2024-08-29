<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/address/create', [AddressController::class, 'create']);
    Route::post('/employees/create', [EmployeeController::class, 'create']);
});










