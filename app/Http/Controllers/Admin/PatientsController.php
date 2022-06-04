<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        return view('modules.patients.index',[
            'patients' => Patient::all()
        ]);
    }

    public function create()
    {
        return view('modules.patients.create');
    }

    public function store(PatientRequest $request)
    {
        Patient::create($request->validated());
        return redirect()->route('patients.index')->with('message', 'Creado exitosamente');
    }

    public function show(Patient $patient)
    {
        //
    }

    public function edit(Patient $patient)
    {
        return view('modules.patients.edit', [
            'patient' => $patient
        ]);
    }

    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->validated());
        return redirect()->route('patients.index')->with('message', 'Actualizado exitosamente');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('message', 'Eliminado exitosamente');
    }
}