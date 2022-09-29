<?php

use Illuminate\Support\Facades\Route;

Route::resource('branches', \App\Http\Controllers\Admin\BranchController::class);
Route::resource('patients', \App\Http\Controllers\Admin\PatientController::class);
Route::resource('attachments', \App\Http\Controllers\Admin\AttachmentController::class);
Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
Route::resource('diseases', \App\Http\Controllers\Admin\DiseaseController::class);
Route::resource('staffs', \App\Http\Controllers\Admin\StaffController::class);
Route::resource('departments', \App\Http\Controllers\Admin\DepartmentController::class);

Route::resource('patient.appointment', \App\Http\Controllers\Admin\PatientAppointmentController::class)->only('create', 'store');

Route::resource('appointments', \App\Http\Controllers\Admin\Appointment\AppointmentController::class);
Route::resource('appointment.signs', \App\Http\Controllers\Admin\Appointment\SignController::class)->only('create', 'store');
Route::resource('appointment.attachment', \App\Http\Controllers\Admin\Appointment\AttachmentController::class)->only('create', 'store');

Route::prefix('report')->name('report.')->group(function (){
    Route::any('appointment/{appointment}/general', \App\Http\Controllers\Admin\Reports\GeneralController::class)->name('appointment.general');
});
