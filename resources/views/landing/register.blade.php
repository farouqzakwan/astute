<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config('app.name') .' | Sign Up A New Account'}}</title>
        <link href="/css/app.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
        <style>
            body 
            {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @livewireStyles
    </head>
    <body class="bg-gray-200">
        @livewire('landing.register');
        @livewireScripts
    </body>
</html>
