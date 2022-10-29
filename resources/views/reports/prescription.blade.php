<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <style>
        .space-header {
            text-align: center;
            padding-bottom: 2%
        }
    </style>
</head>
<body>
<center>
    <img src="{{ public_path('assets/img/new_logo.jpeg') }}" alt="Logo Image">
</center>
<table style="padding-top: 15px; width: 100%">
    <tr>
        <td colspan="6" class="space-header"><strong>Datos del Paciente:</strong></td>
    </tr>
    <tr>
        <td>Nombres:</td>
        <td>{{ $appointment->patient->name }}</td>
    </tr>
    <tr>
        <td>Apellidos:</td>
        <td>{{ $appointment->patient->surname }}</td>
    </tr>
    <tr>
        <td>Edad:</td>
        <td>{{ $appointment->patient->birth_at->diffForHumans() }}</td>
    </tr>
</table>
<hr>
<table style="padding-top: 2px; width: 100%">
    <tr>
        <td colspan="6" class="space-header"><strong>Prescripción:</strong></td>
    </tr>
    <tr>
        <td><strong>Medicina</strong></td>
        <td><strong>Dosis</strong></td>
        <td><strong>Frecuencia</strong></td>
        <td><strong>Duración</strong></td>
    </tr>
    @foreach($appointment->prescriptions as $prescription)
        <tr>
            <td>{{ $prescription->medicine->name }}</td>
            <td>{{ $prescription->dose }}</td>
            <td>{{ $prescription->frequency }}</td>
            <td>{{ $prescription->duration }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
