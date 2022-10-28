<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LaboratoryRequest;

class LaboratoryController extends Controller
{
    public function store(LaboratoryRequest $request)
    {
        dd($request->all());
    }
}
