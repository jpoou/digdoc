<?php

use Illuminate\Support\Facades\Route;

Route::view('home', 'components.home')->name('name')->middleware('auth');

Route::resource('branches', \App\Http\Controllers\Admin\BranchController::class);
Route::resource('patients', \App\Http\Controllers\Admin\PatientsController::class);
