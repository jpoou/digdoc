<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboratoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'attachment_id' => 'required',
            'file' => 'nullable|file',
            'observation' => 'nullable'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
