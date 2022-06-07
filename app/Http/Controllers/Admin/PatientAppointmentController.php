<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
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

    public function store(Patient $patient, AppointmentRequest $request)
    {
        $valid = $request->validated();
        $valid['creator_id'] = auth()->id();

        $patient->appointments()->create($valid);

        return redirect()->route('patients.index')->with('Cita creada exitosamente');
    }
}