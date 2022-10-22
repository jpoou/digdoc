<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Models\Disease;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrescriptionRequest;

class PrescriptionController extends Controller
{
    public function index(Appointment $appointment)
    {
        $appointment->load('prescriptions');

        return view('modules.prescriptions.index', [
            'appointment' => $appointment,
            'diseases' => Disease::all()
        ]);
    }

    public function store(Appointment $appointment, PrescriptionRequest $request)
    {
        $appointment->prescriptions()->create([
            'user_id' => auth()->id(),
            ...$request->validated()
        ]);

        return redirect()->route('appointment.prescription.index', $appointment)->with('message', 'Creado exitosamente');
    }

}
