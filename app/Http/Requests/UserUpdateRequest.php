<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        $user = $this->route('user');

        return [
            'name' => ['required'],
            'email' => ['required', "unique:users,email,{$user->id}"],
            'staff_id' => ['nullable', "unique:users,staff_id,{$user->id}"],
            'role_id' => ['nullable', 'numeric']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
