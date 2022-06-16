<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('modules.roles.index', [
            'roles' => Role::all()
        ]);
    }

    public function create()
    {
        return view('modules.roles.create');
    }

    public function store(RoleRequest $request)
    {
        Role::create($request->validated());
        return redirect()->route('roles.index')->with('message', 'Creado exitosamente');
    }

    public function edit(Role $role)
    {
        return view('modules.roles.edit', [
            'role' => $role
        ]);
    }

    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->validated());
        return redirect()->route('roles.index')->with('message', 'Creado exitosamente');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('message', 'Eliminado exitosamente');
    }
}