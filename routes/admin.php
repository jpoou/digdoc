<?php

use Illuminate\Support\Facades\Route;


Route::resource('branches', \App\Http\Controllers\Admin\BranchController::class);
