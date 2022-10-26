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
        $appointments = Appointment::query()
            ->when(request()->has('status') && request('status'), function ($query){
                $query->where('status', request('status'));
            })
            ->when(request()->has('staff_id') && request('staff_id'), function ($query){
                $query->where('doctor_id', request('staff_id'));
            })->withCount('signs')->orderByDesc('created_at')->get();

        return view('modules.appointments.index',[
            'appointments' => $appointments,
            'doctors' => Staff::all()
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
