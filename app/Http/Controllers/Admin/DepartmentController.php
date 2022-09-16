<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest as Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('modules.departments.index', [
            'departments' => Department::all()
        ]);
    }

    public function create()
    {
        return view('modules.departments.create');
    }

    public function store(Request $request)
    {
        Department::create($request->validated());
        return redirect()->route('departments.index')->with('message', 'Creado exitosamente');
    }

    public function edit(Department $department)
    {
        return view('modules.departments.edit', [
            'department' => $department
        ]);
    }

    public function update(Request $request, Department $department)
    {
        $department->update($request->validated());
        return redirect()->route('departments.index')->with('message', 'Creado exitosamente');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('message', 'Eliminado exitosamente');
    }
}
