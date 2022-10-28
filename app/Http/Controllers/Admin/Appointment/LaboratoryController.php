<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Models\Attachment;
use App\Models\Laboratory;
use App\Models\Appointment;
use App\Enums\AttachmentType;
use App\Http\Controllers\Controller;
use App\Http\Requests\LaboratoryRequest;

class LaboratoryController extends Controller
{
    public function index(Appointment $appointment)
    {
        return view('modules.laboratories.index', [
            'appointment' => $appointment,
            'studies' => Attachment::query()->whereType(AttachmentType::STUDY)->get()
        ]);
    }

    public function store(Appointment $appointment, LaboratoryRequest $request)
    {
        if ($appointment->laboratories()->whereAttachmentId($request->input('attachment_id'))->exists()) {
            return redirect()
                ->route('appointment.laboratories.index', $appointment)
                ->with('message', 'El paciente ya tiene asignado laboratorio');
        }

        $appointment->laboratories()->create([
            'user_id' => auth()->id(),
            'file' => $request->has('file') ?? $request->file('file')->store('public'),
            ...$request->all()
        ]);

        return redirect()->route('appointment.laboratories.index', $appointment)->with('message', 'Creado exitosamente');
    }

    public function destroy(Appointment $appointment, Laboratory $laboratory)
    {
        $laboratory->delete();

        return redirect()->route('appointment.laboratories.index', $appointment)->with('message', 'Eliminado exitosamente');
    }
}
