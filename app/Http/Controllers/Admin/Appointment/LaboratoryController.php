<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Http\Controllers\Controller;
use App\Http\Requests\LaboratoryRequest;
use App\Models\Appointment;
use App\Models\Laboratory;
use Illuminate\Support\Facades\Request;

class LaboratoryController extends Controller
{
    public function store(Appointment $appointment, LaboratoryRequest $request)
    {
        $data = $request->validated();
        $data['appointment_id'] = $appointment->id;
        $data['user_id'] = auth()->id();
        $data['file'] = $request->file('file')->store('public');

        Laboratory::create($data);

        return redirect()->route('appointment.prescription.index', $appointment)->with('message', 'Creado exitosamente');
    }
}
