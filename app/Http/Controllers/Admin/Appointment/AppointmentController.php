<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Enums\AppointmentStatus;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest as Request;
use App\Models\Branch;
use App\Models\Staff;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('modules.appointments.index',[
            'appointments' => Appointment::withCount('signs')->get()
        ]);
    }

    public function edit(Appointment $appointment)
    {
        $appointment->load('patient');

        return view('modules.appointments.edit', [
            'appointment' => $appointment,
            'doctors' => Staff::all(),
            'branches' => Branch::all()
        ]);
    }

    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->validated());
        return redirect()->route('appointments.index')->with('message', 'Actualizado exitosamente');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->update([
            'status' => AppointmentStatus::COMPLETE
        ]);

        return redirect()->route('appointments.index')->with('message', 'Eliminado exitosamente');
    }
}
