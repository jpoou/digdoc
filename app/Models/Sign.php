<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sign extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'code',
        'name',
        'unit',
        'description'
    ];

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class)
            ->using(AppointmentSign::class)
            ->withTimestamps()
            ->withPivot('value');
    }
}