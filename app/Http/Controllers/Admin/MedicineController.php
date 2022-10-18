<?php

namespace App\Http\Controllers\Admin;

use App\Models\Medicine;
use App\Http\Controllers\Controller;
use App\Http\Requests\MedicineRequest;

class MedicineController extends Controller
{
    public function index()
    {
        return view('modules.medicines.index', [
            'medicines' => Medicine::all()
        ]);
    }

    public function create()
    {
        return view('modules.medicines.create');
    }

    public function store(MedicineRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = str($data['name'])->slug();
        Medicine::create($data);
        return redirect()->route('medicines.index')->with('message', 'Creado exitosamente');
    }

    public function edit(Medicine $medicine)
    {
        return view('modules.medicines.edit', [
            'medicine' => $medicine
        ]);
    }

    public function update(MedicineRequest $request, Medicine $medicine)
    {
        $medicine->update($request->validated());
        return redirect()->route('medicines.index')->with('message', 'Actualizado exitosamente');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicines.index')->with('message', 'Eliminado exitosamente');
    }
}
