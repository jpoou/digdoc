<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'patient_id',
        'branch_id',
        'doctor_id',
        'creator_id',
        'appointment_at',
        'from',
        'to',
        'reason',
        'status'
    ];
}