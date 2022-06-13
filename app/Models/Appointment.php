<?php

namespace App\Models;

use App\Enums\AppointmentStatus;
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

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => AppointmentStatus::class
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'doctor_id');
    }

    public function signs()
    {
        return $this->belongsToMany(Sign::class)
            ->using(AppointmentSign::class)
            ->withTimestamps()
            ->withPivot('value');
    }

    public function attachments()
    {
        return $this->belongsToMany(Attachment::class)
            ->using(AppointmentAttachment::class)
            ->withTimestamps();
    }
}