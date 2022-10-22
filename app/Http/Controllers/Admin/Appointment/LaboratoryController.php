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
        $appointment->laboratories()->create([
            'user_id' => auth()->id(),
            'file' => $request->file('file')->store('public'),
            'observation' => $request->input('observation')
        ]);

        return redirect()->route('appointment.prescription.index', $appointment)->with('message', 'Creado exitosamente');
    }
}
