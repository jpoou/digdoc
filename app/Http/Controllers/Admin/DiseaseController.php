<?php

namespace App\Http\Controllers\Admin;

use App\Models\Disease;
use App\Http\Controllers\Controller;
use App\Http\Requests\DiseaseRequest;

class DiseaseController extends Controller
{
    public function index()
    {
        return view('modules.diseases.index', [
            'diseases' => Disease::all()
        ]);
    }

    public function create()
    {
        return view('modules.diseases.create');
    }

    public function store(DiseaseRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = str($data['name'])->slug('-');
        Disease::create($data);
        return redirect()->route('diseases.index')->with('message', 'Creado exitosamente');
    }

    public function edit(Disease $disease)
    {
        return view('modules.diseases.edit', [
            'disease' => $disease
        ]);
    }

    public function update(DiseaseRequest $request, Disease $disease)
    {
        $disease->update($request->validated());
        return redirect()->route('diseases.index')->with('message', 'Creado exitosamente');
    }

    public function destroy(Disease $disease)
    {
        $disease->delete();
        return redirect()->route('diseases.index')->with('message', 'Eliminado exitosamente');
    }
}