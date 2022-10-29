<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Disease;
use App\Models\Staff;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $diseases = DB::select('select d.name disease, COUNT(*) count_disease from diseases d
            inner join `diagnostics` d2 on d2.disease_id = d.id
            inner join appointments a on a.id = d2.appointment_id
            inner join patients p on p.id = a.patient_id
            group by d.name limit 6');

        return view('components.home', [
            'appointments_count' => Appointment::count(),
            'patients_count' => Patient::count(),
            'doctors_count' => Staff::count(),
            'branches_count' => Branch::count(),
            'patients' => Patient::withCount('appointments')->orderByDesc('id')->take(8)->get(),
            'doctors' => Staff::with('branch')->orderByDesc('id')->take(8)->get(),
            'diseases' => [ 'labels' => collect($diseases)->pluck('disease'), 'data' => collect($diseases)->pluck('count_disease')]
        ]);
    }
}
