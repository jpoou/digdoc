<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiagnosticRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'diseases' => 'required|array',
            'observation' => 'required|min:2'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
