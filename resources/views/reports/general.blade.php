<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div><img src="{{ public_path('assets/img/new_logo.jpeg') }}" alt="Logo Image"></div>

    <table style="padding-top: 15px; width: 100%">
        <tr>
            <td colspan="6" style="text-align: center; padding-bottom: 2%"><strong>Datos del Paciente:</strong></td>
        </tr>
        <tr>
            <td>CUI / No. Caso:</td>
            <td>{{ $appointment->patient->identifier }}</td>
            <td>Fecha:</td>
            <td>{{ $appointment->patient->created_at->format('d/m/Y') }}</td>
            <td>Sexo:</td>
            <td>{{ $appointment->patient->gender->text() }}</td>
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
            <td>Fecha de nacimiento:</td>
            <td>{{ $appointment->patient->birth_at->format('d/m/Y') }}</td>
            <td>Edad:</td>
            <td>{{ $appointment->patient->birth_at->diffForHumans() }}</td>
        </tr>
        <tr>
            <td>Corre Electrónico:</td>
            <td>{{ $appointment->patient->email }}</td>
            <td>Teléfono:</td>
            <td>{{ $appointment->patient->phone }}</td>
        </tr>
        <tr>
            <td>Tipo de sangre:</td>
            <td>{{ $appointment->patient->blood_type }}</td>
        </tr>
    </table>
    <hr>
    <table style="padding-top: 5px; width: 100%">
        <tr>
            <td>Motivo:</td>
            <td>{{ $appointment->reason }}</td>
        </tr>
        <tr>
            <td>Ultima enfermedad:</td>
            <td>{{ $appointment->diagnostics->last()->disease->name }}</td>
        </tr>
        <tr>
            <td>Ultima receta:</td>
            <td>{{ $appointment->prescriptions->last()->created_at->diffForHumans() }}</td>
        </tr>
        <tr>
            <td>Ultima estudios:</td>
            <td>{{ $appointment->laboratories->last()->created_at->diffForHumans() }}</td>
        </tr>
    </table>
    <hr>
    <table style="padding-top: 2px; width: 100%">
        <tr>
            <td colspan="6" style="text-align: center; padding-bottom: 2%"><strong>Signos Vitales:</strong></td>
        </tr>
        @foreach($appointment->signs as $sing)
            <tr>
                <td>{{ $sing->name }}:</td>
                <td>{{ $sing->pivot->value }} {{ $sing->unit }}</td>
            </tr>
        @endforeach
    </table>
    <hr>
    <table style="padding-top: 2px; width: 100%">
        <tr>
            <td colspan="6" style="text-align: center; padding-bottom: 2%"><strong>Prescripción:</strong></td>
        </tr>
        <tr>
            <td><strong>Medicina</strong></td>
            <td><strong>Dosis</strong></td>
            <td><strong>Frecuencia</strong></td>
            <td><strong>Duración</strong></td>
        </tr>
        @foreach($appointment->prescriptions as $prescription)
            <tr>
                <td>{{ $prescription->medicine->name }}:</td>
                <td>{{ $prescription->dose }}</td>
                <td>{{ $prescription->frequency }}</td>
                <td>{{ $prescription->duration }}</td>
            </tr>
        @endforeach
    </table>
    <hr>
    <table style="padding-top: 2px; width: 100%">
        <tr>
            <td colspan="6" style="text-align: center; padding-bottom: 2%"><strong>Enfermedades:</strong></td>
        </tr>
        <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Descripción</strong></td>
            <td><strong>Permanente</strong></td>
        </tr>
        @foreach($appointment->diagnostics as $diagnostic)
            <tr>
                <td>{{ $diagnostic->disease->name }}:</td>
                <td>{{ $diagnostic->disease->description }}:</td>
                <td>{{ $diagnostic->disease->permanent ? 'Si' : 'No' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
