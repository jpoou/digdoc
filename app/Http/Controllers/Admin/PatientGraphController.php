<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use App\Models\Sign;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PatientGraphController extends Controller
{
    public function index()
    {
        $query = DB::table('patients as p')
            ->select('p.id', 'p.name', 's.name as sing_name', 's.code', 's.id as sign_id', DB::raw('max(as2.value) as value'), 'a.appointment_at')
            ->join('appointments as a', 'a.patient_id', '=', 'p.id')
            ->join('appointment_sign as as2', 'as2.appointment_id', '=', 'a.id')
            ->join('signs as s', 's.id', '=', 'as2.sign_id')
            ->groupBy('p.id', 'p.name', 's.name', 's.code', 's.id', 'a.appointment_at')
            ->orderBy('a.appointment_at');

        if (request()->has('patient_id') && request('patient_id')) {
            $query->where('p.id', request('patient_id'));
        }

        if (request()->has('sign_id') && request('sign_id')) {
            $query->where('s.id', request('sign_id'));
        }

        return view('modules.graphics.patients', [
            'patients' => Patient::orderByDesc('created_at')->get(),
            'signs' => Sign::orderByDesc('created_at')->get(),
            'labels' => collect($query->get())->groupBy('appointment_at')->keys(),
            'signSelect' => Sign::whereId(request('sign_id', 1))->first(),
            'data' => collect($query->get())->pluck('value')
        ]);
    }
}
