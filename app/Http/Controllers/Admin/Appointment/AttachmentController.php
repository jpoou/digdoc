<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Models\Attachment;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentAttachmentRequest as Request;

class AttachmentController extends Controller
{
    public function create(Appointment $appointment)
    {
        return view('modules.appointments.attachment', [
            'appointment' => $appointment,
            'attachments' => Attachment::all()
        ]);
    }

    public function store(Request $request, Appointment $appointment)
    {
        $appointment->attachments()->attach($request->attachment_id, $request->validated());
        return redirect()->route('appointments.index')
            ->with('message', 'Adjunto creados correctamente');
    }
}
