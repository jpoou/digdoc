<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Support\Facades\App;

class PrescriptionController extends Controller
{
    public function __invoke(Appointment $appointment)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.prescription', [
            'appointment' => $appointment
        ]);
        return $pdf->stream();
    }
}
