<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Patient;
use App\Models\Staff;
use Illuminate\Http\Request;

class PatientAppointmentController extends Controller
{
    public function create(Patient $patient)
    {
        return view('modules.appointments.create', [
            'patient' => $patient,
            'doctors' => Staff::all(),
            'branches' => Branch::all()
        ]);
    }

    public function store(Patient $patient, Request $request)
    {
        $patient->appointment()->create([
            'branch_id' => $request->branch_id,
            'doctor_id' => $request->doctor_id,
            'creator_id' => auth()->id(),
            'appointment_at' => $request->appointment_at,
            'from' => $request->from,
            'to' => $request->to,
            'reason' => $request->reason
        ]);

        return redirect()->route('patients.index')->with('Cita creada exitosamente');
    }
}