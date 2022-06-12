<?php

namespace App\Enums;

enum AttachmentType: string
{
    case HISTORY = 'history';
    case DIAGNOSIS = 'diagnosis';
    case PRESCRIPTION = 'prescription';
    case STUDY = 'study';

    public function color(): string
    {
        return match ($this) {
            AttachmentType::HISTORY => 'purple',
            AttachmentType::DIAGNOSIS => 'green',
            AttachmentType::PRESCRIPTION => 'purple',
            AttachmentType::STUDY => 'orange'
        };
    }
}