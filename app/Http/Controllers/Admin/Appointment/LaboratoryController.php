<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Http\Controllers\Controller;
use App\Http\Requests\LaboratoryRequest;
use App\Models\Appointment;
use App\Models\Laboratory;
use Illuminate\Support\Facades\Request;

class LaboratoryController extends Controller
{
    public function index()
    {
        return view('modules.branches.index', [
            'laboratories' => Laboratory::all()
        ]);
    }

    public function create()
    {
        return view('modules.branches.create');
    }

    public function store(Appointment $appointment, LaboratoryRequest $request)
    {
        $data = $request->validated();
        $data['appointment_id'] = $appointment->id;
        $data['user_id'] = auth()->id();
        $data['file'] = $request->file('file')->store('public');

        Laboratory::create($data);

        return redirect()->route('appointment.prescription.index', $appointment)->with('message', 'Creado exitosamente');
    }

    public function edit(Laboratory $branch)
    {
        return view('modules.branches.edit', [
            'branch' => $branch
        ]);
    }

    public function update(LaboratoryRequest $request, Laboratory $branch)
    {
        $branch->update($request->validated());
        return redirect()->route('laboratories.index')->with('message', 'Creado exitosamente');
    }

    public function destroy(Laboratory $branch)
    {
        $branch->delete();
        return redirect()->route('laboratories.index')->with('message', 'Eliminado exitosamente');
    }
}
