@component('mail::message')
# Hola, {{ $appointment->patient->name }}

## Tu cita ha sido confirmada

Tu cita con {{ $appointment->staff->name }} en {{ $appointment->branch->name }} ha sido confirmada,

dia: {{ $appointment->appointment_at->format('D M y') }} a las {{ $appointment->from }}

@component('mail::panel')
    Motivo: {{ $appointment->reason }}
@endcomponent

Gracias por tu preferencia,<br>
{{ config('app.name') }}
@endcomponent
