<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martian Mono:wght@100;200;300;400;500;600;700;800&display=swap"
    >

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-slate-700 antialiased">
<main class="min-h-screen flex flex-col items-center justify-center puzzle-bg-revert">
    {{ $slot }}
</main>

</body>
</html>
