<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Models\Audit;

class AuditController extends Controller
{
    public function index()
    {
        $scannedDirectory = array_diff(scandir(app_path('Models')), array('..', '.'));

        return view('modules.audits.index', [
            'models' => $scannedDirectory,
            'users' => User::orderByDesc('created_at')->get(),
            'audits' => Audit::orderByDesc('created_at')->get()
        ]);
    }

    public function show(Audit $audit)
    {
        $audit->load('user');

        return view('modules.audits.show', [
            'audit' => $audit
        ]);
    }
}
