<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Patient;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index()
    {
        return view('components.home', [
            'appointments_count' => Appointment::count(),
            'patients_count' => Patient::count(),
            'patients' => Patient::withCount('appointments')->orderByDesc('id')->take(8)->get(),
            'doctors' => Staff::with('branch')->orderByDesc('id')->take(8)->get()
        ]);
    }
}