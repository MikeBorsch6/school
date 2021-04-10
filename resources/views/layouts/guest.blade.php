<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <style>
            @php
                echo(file_get_contents(public_path('css/app.css')))
            @endphp
        </style>
        
        {{-- <link rel="stylesheet" href="{{ base_path('public/css/app.css') }}"> --}}

        <!-- Scripts -->
        
        <script defer>
            @php
            echo(
                file_get_contents(public_path('js/app.js'))
            )
            @endphp
        </script>
    
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
