<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentAttachmentController extends Controller
{
    public function create(Appointment $appointment)
    {
        return view('modules.appointments.attachment', [
            'appointment' => $appointment
        ]);
    }
}