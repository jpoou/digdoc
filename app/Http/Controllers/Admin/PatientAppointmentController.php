<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Mail\AppointmentCreatedMail;
use App\Models\Branch;
use App\Models\Patient;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $appointment = $patient->appointments()->create($valid);

        Mail::to($patient)->send(new AppointmentCreatedMail($appointment));

        return redirect()->route('appointment.signs.create', $appointment )->with('Cita creada exitosamente');
    }
}
