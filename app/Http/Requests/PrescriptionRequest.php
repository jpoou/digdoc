<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrescriptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'medicine_id' => 'required',
            'dose' => 'required',
            'frequency' => 'required',
            'duration' => 'required',
            'comment' => 'nullable|min:3'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
