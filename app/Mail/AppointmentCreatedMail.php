<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Mail\Mailable;

class AppointmentCreatedMail extends Mailable
{
    public Appointment $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment->load('patient');
    }

    public function build()
    {
        return $this->subject('Tu cita ha sido confirmada!')->markdown('emails.appointment-created');
    }
}
