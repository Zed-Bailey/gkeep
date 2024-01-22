<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
      
    </head>
    <body class="bg-slate-100">
        <nav class="flex justify-between p-2">
            <h1 class="text-xl font-bold">gKeep</h1>

            <div class="space-x-2">
                <button class="border-2 border-slate-900 rounded-md px-2 bg-yellow-200 hover:bg-yellow-400 hover:font-bold">Login</button>
                <button class="border-2 border-slate-900 rounded-md px-2 bg-pink-200 hover:bg-pink-400 hover:font-bold">Sign up</button>
            </div>
            
        </nav>

        <main>
            <div>
                <h2 class="text-3xl">Your Notes</h2>
            </div>

            <div class="border-2 border-slate-900 rounded-md w-96 p-2">
                <input placeholder="title" class="bg-transparent focus:ring-transparent text-lg w-full"/>
                <textarea class="w-full bg-transparent text-sm h-48 max-h-48 min-h-48 resize-none" placeholder="your note..."></textarea>

                <div class="flex justify-evenly overflow-scroll">
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>
                    <button class="rounded-full h-5 w-5 bg-yellow-200 border-2 border-slate-900"></button>

                </div>
            </div>
            
            <div class="flex justify-start">
                
            </div>

        </main>
        
        
    </body>
</html>
