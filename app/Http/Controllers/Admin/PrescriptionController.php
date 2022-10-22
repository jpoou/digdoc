<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prescription;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    public function destroy(Prescription $prescription)
    {
        $prescription->delete();
        return redirect()->route('appointment.prescription.index', $prescription->appointment);
    }
}
