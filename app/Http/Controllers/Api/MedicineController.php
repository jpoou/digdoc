<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        if (!request()->has('search') || !request('search')) {
            return Medicine::query()
                ->select('id', 'name as text')
                ->orderByDesc('created_at')
                ->take(5)->get();
        }

        $search = request('search');

        return Medicine::query()->select('id', 'name as text')
            ->where('name', 'like', "%{$search}%")
            ->get();
    }

    public function show(Medicine $medicine)
    {
        return $medicine;
    }
}
