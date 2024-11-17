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
    <body class="font-sans antialiased bg-pink-50 dark:bg-pink-900">
        <div class="text-black/50 dark:text-white/50">

            <div class="min-h-screen flex flex-col items-center justify-center space-y-6">
                <h1 class="text-6xl font-bold text-center">kerkness</h1>

                    <flux:separator text="projects" />

                <div class="flex flex-col justify-center items-center space-y-2">
                    <flux:button variant="ghost" href="https://cowleyabbott.ca">
                        cowleyabbott.ca
                    </flux:button>
                    <flux:button variant="ghost" href="https://mayberryfineart.com">
                        mayberryfineart.com
                    </flux:button>
                    <flux:button variant="ghost" href="https://bidlots.ca">
                        bidlots.ca
                    </flux:button>
                </div>

            </div>


        </div>
    </body>
</html>
