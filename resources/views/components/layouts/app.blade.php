<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
      
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="bg-slate-100">
            {{-- TODO: move to root layout --}}
        <nav class="flex justify-between p-2">
            <h1 class="text-xl font-bold">gKeep</h1>

            <div class="space-x-2">
                <button class="border-2 border-slate-900 rounded-md px-2 bg-yellow-200 hover:bg-yellow-400 hover:font-bold">Login</button>
                <button class="border-2 border-slate-900 rounded-md px-2 bg-pink-200 hover:bg-pink-400 hover:font-bold">Sign up</button>
            </div>
            
        </nav>
        
        <main class="p-2 w-full">
            {{ $slot }}
        </main>
        

    </body>
</html>
