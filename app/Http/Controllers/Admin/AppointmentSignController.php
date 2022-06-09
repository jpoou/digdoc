<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Models\Sign;

class AppointmentSignController extends Controller
{
    public function create(Appointment $appointment)
    {
        dd(Sign::all()->toArray());
        return view('modules.appointments.signs', [
            'appointment' => $appointment,
            'signs' => Sign::all()
        ]);
    }
}