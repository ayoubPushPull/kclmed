<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('landing/assets/images/logo/logo2.png')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('dashboard/assets/css/theme.css?ver=3.1.2') }}">
    <link href="{{ asset('dashboard/assets/css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
    <!-- Scripts -->
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles

</head>

<body class="nk-body ui-rounder npc-default pg-survey">
    {{ $slot }}
    <!-- JavaScript -->
    <script src="{{ asset('dashboard/assets/js/bundle.js?ver=3.1.2') }}./"></script>
    <script src="{{ asset('dashboard/assets/js/scripts.js?ver=3.1.2') }}"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
