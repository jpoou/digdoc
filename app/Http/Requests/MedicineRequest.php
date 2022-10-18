<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'dose' => 'required',
            'frequency' => 'required',
            'duration' => 'required',
            'description' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
