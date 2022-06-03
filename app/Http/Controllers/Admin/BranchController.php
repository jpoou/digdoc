<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;

class BranchController extends Controller
{
    public function index()
    {
        return view('modules.branches.index', [
            'branches' => Branch::all()
        ]);
    }

    public function create()
    {
        return view('modules.branches.create');
    }

    public function store(BranchRequest $request)
    {
        Branch::create($request->validated());
        return redirect()->route('branches.index')->with('message', 'Creado exitosamente');
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branches.index')->with('message', 'Eliminado exitosamente');
    }
}