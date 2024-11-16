<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kerkness</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

                <div class="min-h-screen flex flex-col items-center justify-center">
                    <h1 class="text-6xl font-bold text-center">kerkness</h1>
                    <p class="text-lg text-center">Lines of code I weave</p>
                    <p class="text-lg text-center">Comics, pizza, dreams achieved</p>
                    <p class="text-lg text-center">Dad jokes take the lead</p>
                </div>
        </div>
    </body>
</html>
