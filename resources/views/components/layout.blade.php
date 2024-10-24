<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="m-0 p-0">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Haide is the place where you can discover or create events and connect with friends, like-minded people, or anyone ready for a fun experience.">
        <title>{{ $title }}</title>
        @vite('resources/css/app.css')
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    </head>
    <body class="relative primary-colors overflow-x-hidden">
        <x-header></x-header>
        {{ $slot }}
    </body>
</html>
