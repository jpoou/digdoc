<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use App\Http\Requests\StaffRequest;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        return view('modules.staffs.index',[
            'staffs' => Staff::all()
        ]);
    }

    public function create()
    {
        return view('modules.staffs.create');
    }

    public function store(StaffRequest $request)
    {
        Staff::create($request->validated());
        return redirect()->route('staffs.index')->with('message', 'Creado exitosamente');
    }

    public function show(Staff $staff)
    {
        //
    }

    public function edit(Staff $staff)
    {
        return view('modules.staffs.edit', [
            'staff' => $staff
        ]);
    }

    public function update(StaffRequest $request, Staff $staff)
    {
        $staff->update($request->validated());
        return redirect()->route('staffs.index')->with('message', 'Actualizado exitosamente');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staffs.index')->with('message', 'Eliminado exitosamente');
    }
}
