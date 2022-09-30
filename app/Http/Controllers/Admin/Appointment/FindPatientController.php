<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class FindPatientController extends Controller
{
    public function index()
    {
        return view('modules.appointments.start.find-patient', [
            'patients' => Patient::take(5)->paginate(5)
        ]);
    }

    public function search(Request $request)
    {
        $patients = Patient::query()
            ->orWhere('name', 'LIKE', "%{$request->search}%")
            ->orWhere('surname', 'LIKE', "%{$request->search}%")
            ->orWhere('identifier', 'LIKE', "%{$request->search}%")
            ->orderByDesc('created_at')
            ->paginate(5);

        return view('modules.appointments.start.find-patient', [
            'patients' => $patients
        ]);
    }
}
