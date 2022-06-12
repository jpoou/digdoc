<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('modules.appointments.index',[
            'appointments' => Appointment::withCount('signs')->get()
        ]);
    }

    public function show(Appointment $appointment)
    {
        //
    }

    public function edit(Appointment $appointment)
    {
        return view('modules.patients.edit', [
            'appointment' => $appointment
        ]);
    }

    public function update(AppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->validated());
        return redirect()->route('patients.index')->with('message', 'Actualizado exitosamente');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('message', 'Eliminado exitosamente');
    }
}