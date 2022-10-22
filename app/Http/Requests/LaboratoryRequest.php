<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboratoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'file' => 'required|file',
            'observation' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
