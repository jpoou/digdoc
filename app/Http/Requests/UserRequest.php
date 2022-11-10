<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'staff_id' => ['nullable', 'unique:users,staff_id'],
            'role_id' => ['nullable', 'numeric']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
