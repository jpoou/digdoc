<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Models\Appointment;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    public function index(Appointment $appointment)
    {
        return view('modules.prescriptions.index', [
            'appointment' => $appointment
        ]);
    }
}
