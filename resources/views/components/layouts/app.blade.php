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
        
        <nav class="flex justify-between px-4 py-4">
            <h1 class="text-xl font-bold">gKeep</h1>
            @guest
            <div class="space-x-2">
                <a href="/login" class="border-2 border-yellow-400 text-yellow-900 rounded-md px-2 py-1 bg-yellow-200 hover:bg-yellow-400 ">Login</a>
                <a href="/register" class="border-2 border-pink-400 text-pink-900 rounded-md px-2 py-1 bg-pink-200 hover:bg-pink-400">Sign up</a>
            </div>
            @else
            <div class="space-x-2">
                <a href="/logout" class="border-2 border-blue-900 rounded-md px-2 py-1 bg-blue-200 hover:bg-blue-400 hover:font-bold">Logout</a>
            </div>
            @endguest
            
        </nav>
        
        <main class="p-2 w-full">
            {{ $slot }}
        </main>
        

    </body>
</html>
