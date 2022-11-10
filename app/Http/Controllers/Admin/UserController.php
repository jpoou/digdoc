<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('modules.users.index',[
            'users' => User::with('roles')->orderByDesc('created_at')->get()
        ]);
    }

    public function create()
    {
        return view('modules.users.create', [
            'staffs' => Staff::orderByDesc('created_at')->get(),
            'roles' => Role::orderByDesc('created_at')->get()
        ]);
    }

    public function store(UserRequest $request)
    {

        $data = [
            'password' => Hash::make($password = str()->random()),
            ...$request->validated()
        ];

        $user = User::create($data);

        if ($request->has('role_id') && $request->input('role_id')) {
            $user->assignRole($request->input('role_id'));
        }

        return redirect()->route('users.index')->with('message', 'Creado exitosamente');
    }

    public function show(User $staff)
    {
        //
    }

    public function edit(User $user)
    {
        return view('modules.users.edit', [
            'user' => $user,
            'staffs' => Staff::orderByDesc('created_at')->get(),
            'roles' => Role::orderByDesc('created_at')->get()
        ]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('users.index')->with('message', 'Actualizado exitosamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('message', 'Eliminado exitosamente');
    }
}
