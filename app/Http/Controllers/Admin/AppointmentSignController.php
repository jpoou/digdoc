<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Models\Sign;
use Illuminate\Http\Request;

class AppointmentSignController extends Controller
{
    public function create(Appointment $appointment)
    {
        return view('modules.appointments.signs', [
            'appointment' => $appointment->load('signs'),
            'signs' => Sign::all()
        ]);
    }

    public function store(Request $request, Appointment $appointment)
    {
        $request->validate([
            'sing' => 'required|array'
        ]);

        collect($request->sing)->each(fn($item, $key) => $appointment->signs()->attach( $key, [ 'value' => $item] ));

        return redirect()->route('appointments.index')
            ->with('message', 'Signos creados correctamente');
    }
}