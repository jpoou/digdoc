@component('mail::message')
# Hola, {{ $user->name }}

Usa esta contraseña para iniciar sección: {{ $password }}

@component('mail::button', ['url' => config('app.app.url')])
    Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
