<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->
        <style>
        @font-face {
            font-family: 'Helvetica';
            src:
                url("{{ asset('fonts/FreeSans.otf') }}"),
                url("{{ asset('fonts/FreeSans.ttf') }}"),
                url("{{ asset('fonts/FreeSansBold.otf') }}"),
                url("{{ asset('fonts/FreeSansBold.ttf') }}");
        }
        * {
            font-family: 'Helvetica';
        }
        </style>

        @vite('resources/css/app.css')

        <title>Task Manager</title>

    </head>
    <body class="p-10 h-screen parent-element ">
        {{ $slot}}
    </body>

</html>
