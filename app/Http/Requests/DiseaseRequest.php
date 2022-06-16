<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiseaseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'permanent' => 'nullable'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}