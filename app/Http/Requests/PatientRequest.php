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
            'email' => ['nullable', 'email'],
            'gender' => ['required'],
            'blood_type' => ['nullable'],
            'birth_at' => ['nullable', 'date'],
            'identifier' => [ 'nullable' ]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
