<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AppointmentSign extends Pivot
{
    protected $fillable = [
        'value'
    ];

}