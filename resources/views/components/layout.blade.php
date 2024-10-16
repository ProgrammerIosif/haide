<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="m-0 p-0">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>{{ $title }}</title>
        <meta name="description" content="Haide is the place where you can discover or create events and connect with friends, like-minded people, or anyone ready for a fun experience.">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="relative primary-colors overflow-x-hidden">
        <x-header></x-header>
        {{ $slot }}
    </body>
</html>
