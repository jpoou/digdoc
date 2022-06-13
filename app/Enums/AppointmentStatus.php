<?php

namespace App\Enums;

enum AppointmentStatus: string
{
    case OPEN = 'open';
    case PROGRESS = 'progress';
    case COMPLETE = 'complete';

    public function color(): string
    {
        return match ($this) {
            AppointmentStatus::OPEN => 'secondary',
            AppointmentStatus::PROGRESS => 'primary',
            AppointmentStatus::COMPLETE => 'success'
        };
    }

    public function text(): string
    {
        return match ($this) {
            AppointmentStatus::OPEN => 'Abierto',
            AppointmentStatus::PROGRESS => 'En progreso',
            AppointmentStatus::COMPLETE => 'Completado'
        };
    }
}