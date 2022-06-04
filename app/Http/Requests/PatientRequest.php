<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'surname' => ['required'],
            'phone' => ['required'],
            'email' => ['nullable'],
            'gender' => ['required'],
            'blood_type' => ['nullable'],
            'birth_at' => ['required', 'date']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}