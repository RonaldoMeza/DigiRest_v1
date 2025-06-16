<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Yanone+Kaffeesatz:wght@200..700&display=swap" rel="stylesheet">
        
        <title>{{ $title ?? 'DigiRest' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-slate-200 dark:bg-slate-700 flex flex-col min-h-screen">

        {{-- NAVBAR --}}
        @livewire('partials.navbar')

        <main class="flex-1">
            {{ $slot }}
        </main>

        {{-- FOOTER --}}
        @livewire('partials.footer')  


        @livewireScripts
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    </body>
</html>
