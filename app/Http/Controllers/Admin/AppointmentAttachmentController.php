<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentAttachmentRequest;
use App\Models\Appointment;
use App\Models\Attachment;
use Illuminate\Http\Request;

class AppointmentAttachmentController extends Controller
{
    public function create(Appointment $appointment)
    {
        return view('modules.appointments.attachment', [
            'appointment' => $appointment,
            'attachments' => Attachment::all()
        ]);
    }

    public function store(AppointmentAttachmentRequest $request, Appointment $appointment)
    {
        $appointment->attachments()->attach($request->attachment_id, $request->validated());
        return redirect()->route('appointments.index')
            ->with('message', 'Adjunto creados correctamente');
    }
}