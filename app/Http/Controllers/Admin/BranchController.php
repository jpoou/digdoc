<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use App\Models\Branch;
use Illuminate\Http\Request;

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
}