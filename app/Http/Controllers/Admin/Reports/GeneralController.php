<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    public function __invoke(Appointment $appointment)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.general', [
            'appointment' => $appointment
        ]);
        return $pdf->stream();
    }
}