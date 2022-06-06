<?php

use Illuminate\Support\Facades\Route;

Route::resource('branches', \App\Http\Controllers\Admin\BranchController::class);
Route::resource('patients', \App\Http\Controllers\Admin\PatientsController::class);
Route::resource('appointments', \App\Http\Controllers\Admin\PatientAppointmentController::class)->only('show', 'store');
