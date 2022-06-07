<?php

use Illuminate\Support\Facades\Route;

Route::resource('branches', \App\Http\Controllers\Admin\BranchController::class);
Route::resource('patients', \App\Http\Controllers\Admin\PatientController::class);
Route::resource('patient.appointment', \App\Http\Controllers\Admin\PatientAppointmentController::class)->only('create', 'store');
Route::resource('appointments', \App\Http\Controllers\Admin\AppointmentController::class);
