<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'name' => 'required',
            'surname' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
