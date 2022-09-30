<?php

namespace App\Enums;

enum GenderType: string
{
    case MALE = 'male';
    case FEMININE = 'feminine';
    case OTHER = 'other';

    public function text(): string
    {
        return match ($this) {
            GenderType::MALE => 'Masculino',
            GenderType::FEMININE => 'Femenino',
            GenderType::OTHER => 'Otro'
        };
    }
}
