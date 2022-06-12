<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    /**
     * Get the patient's full name.
     *
     * @return Attribute
     */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => "{$attributes['name']} {$attributes['surname']}",
        );
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}