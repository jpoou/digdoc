<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientAppointmentController extends Controller
{
    public function show()
    {
        return view('modules.appointments.create');
    }

    public function store(Request $request)
    {
        //
    }
}