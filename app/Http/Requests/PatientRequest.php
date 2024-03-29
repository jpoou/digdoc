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
            'birth_at' => ['required', 'date'],
            'identifier' => [ 'nullable' ],
            'contact_name' => [ 'nullable' ],
            'contact_phone' => [ 'nullable', 'min:8' ],
            'address' => [ 'nullable' ]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
