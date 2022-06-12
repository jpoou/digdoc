<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentAttachmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'attachment_id' => ['nullable'],
            'type' => ['required'],
            'quantity' => ['numeric', 'nullable'],
            'indications' => ['required', 'string', 'nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}