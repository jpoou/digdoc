<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'gender',
        'blood_type',
        'birth_at',
        'identifier'
    ];

    protected $casts = [
        'birth_at' => 'date'
    ];

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}