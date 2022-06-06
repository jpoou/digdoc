<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientAppointmentController extends Controller
{
    public function create(Patient $patient)
    {
        return view('modules.appointments.create', [
            'patient' => $patient
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}