@props([
    'title' => null,
    'subtitle' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ ($title ? $title.' - ' : '').'NDG Webdesign' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#111823] text-blue-100 antialiased">
        <div class="relative min-h-screen overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -top-24 -left-16 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"></div>
                <div class="absolute top-1/2 -right-20 h-80 w-80 rounded-full bg-cyan-400/10 blur-3xl"></div>
            </div>

            <header class="relative z-10 border-b border-blue-700/60 bg-[#111823]/75 backdrop-blur-md">
                <div class="container mx-auto flex items-center justify-between px-6 py-4">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-blue-400 drop-shadow-[0_0_8px_rgba(59,130,246,0.7)]">
                        NDG-webdesign
                    </a>
                    <a href="{{ route('home') }}" class="text-sm text-blue-200 hover:text-blue-400 transition-all">
                        Terug naar home
                    </a>
                </div>
            </header>

            <main class="relative z-10 flex min-h-[calc(100vh-73px)] items-center justify-center px-4 py-10 sm:px-6">
                <section class="w-full max-w-xl rounded-3xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl sm:p-8">
                    @if ($title)
                        <h1 class="mb-2 text-2xl font-extrabold text-blue-400 drop-shadow-[0_0_8px_rgba(59,130,246,0.7)] sm:text-3xl">
                            {{ $title }}
                        </h1>
                    @endif

                    @if ($subtitle)
                        <p class="mb-6 text-sm text-blue-200 sm:text-base">
                            {{ $subtitle }}
                        </p>
                    @endif

                    {{ $slot }}
                </section>
            </main>
        </div>
    </body>
</html>
