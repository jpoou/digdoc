<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'branch_id' => ['required'],
            'doctor_id' => ['nullable'],
            'appointment_at' => ['nullable', 'date'],
            'from' => ['required'],
            'to' => ['required', 'after:from'],
            'reason' => ['required']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
