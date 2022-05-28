<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">
    <!-- icons -->
    <link href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--bootstrap -->
    <link href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Material Design Lite CSS -->
    <link href="{{ asset('/assets/plugins/material/material.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/material_style.css') }}" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/theme-color.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

{{ $slot }}

</body>
</html>