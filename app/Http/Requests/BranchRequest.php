<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'type' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'schedule' => ['required']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}