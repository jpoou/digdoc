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

    <link rel="stylesheet" href="{{ asset('/assets/plugins/summernote/summernote.css') }}">
</head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">

    <div class="page-wrapper">

        <x-partials.header/>

        <!-- start page container -->
        <div class="page-container">

            <x-partials.sidebar/>

            <!-- start page content -->
            <div class="page-content-wrapper">
                {{ $slot }}
            </div>
            <!-- end page content -->

            <x-partials.setting/>

        </div>
        <!-- end page container -->

        <x-partials.footer/>

    </div>

    <!-- start js include path -->
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('/assets/plugins/popper/popper.min.js') }}" ></script>
    <script src="{{ asset('/assets/plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
    <script src="{{ asset('/assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
    <!-- counterup -->
    <script src="{{ asset('/assets/plugins/counterup/jquery.waypoints.min.js') }}" ></script>
    <script src="{{ asset('/assets/plugins/counterup/jquery.counterup.min.js') }}" ></script>
    <!-- Common js-->
    <script src="{{ asset('/assets/js/app.js') }}" ></script>
    <script src="{{ asset('/assets/js/layout.js') }}" ></script>
    <script src="{{ asset('/assets/js/theme-color.js') }}" ></script>
    <!-- material -->
    <script src="{{ asset('/assets/plugins/material/material.min.js') }}"></script>
    <!-- morris chart -->
    <script src="{{ asset('/assets/plugins/morris/morris.min.js') }}" ></script>
    <script src="{{ asset('/assets/plugins/morris/raphael-min.js') }}" ></script>
    <!-- end js include path -->

    <script src="{{ asset('assets/plugins/summernote/summernote.min.js') }}" ></script>
    <script src="{{ asset('/assets/js/pages/summernote/summernote-data.js') }}" ></script>
</body>
</html>