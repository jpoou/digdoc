<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Models\Disease;

class PrescriptionController extends Controller
{
    public function index(Appointment $appointment)
    {
        return view('modules.prescriptions.index', [
            'appointment' => $appointment,
            'diseases' => Disease::all()
        ]);
    }
}
