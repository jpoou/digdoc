<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medicine;

class DiseaseController extends Controller
{
    public function index()
    {
        return Medicine::query()->get();
    }
}
