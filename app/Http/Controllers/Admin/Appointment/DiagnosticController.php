<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Models\Diagnostic;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\DiagnosticRequest;

class DiagnosticController extends Controller
{
    public function store(Appointment $appointment, DiagnosticRequest $request)
    {
        $data = $request->validated();
        $data['appointment_id'] = $appointment->id;
        $data['user_id'] = auth()->id();

        collect($data['diseases'])
            ->each(fn($diseaseId) => $appointment->diagnostics()->updateOrCreate(['disease_id' => $diseaseId, 'user_id' => auth()->id(), 'observation' => $data['observation']]));

        return redirect()->route('appointment.prescription.index', $appointment)->with('message', 'Creado exitosamente');
    }
}
