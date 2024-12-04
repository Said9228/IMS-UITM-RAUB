<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\OtherDevicesController; 
use App\Http\Controllers\LayoutController; 
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('technician.dashboard');

Route::get('/hardware', [HardwareController::class, 'index'])->name('hardware');
Route::post('/hardware/{labId}/upload', [HardwareController::class, 'uploadReport'])->name('uploadReport');
Route::post('/hardware/{labId}/verify', [HardwareController::class, 'verifyReport'])->name('verifyReport');

Route::get('/software', [SoftwareController::class, 'index'])->name('software');
Route::get('/other-devices', [OtherDevicesController::class, 'index'])->name('otherDevices');
Route::get('/layout', [LayoutController::class, 'index'])->name('layout');

