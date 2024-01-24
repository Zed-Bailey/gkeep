<div class="mt-10">
    
    <div class="flex flex-col mx-20">
        
            <div class="h-48">
                <h1 class="text-6xl font-light">A note taking app for</h1>
                <x-typing-animation/>
            </div>
            <div class="flex justify-center gap-5 font-bold mt-10">
                <a href="/login" class="px-5 py-2 text-2xl bg-yellow-200 rounded-md hover:bg-yellow-400 border-2 border-yellow-400 text-yellow-900">Login</a>
                <a href="/register" class="px-5 py-2 text-2xl bg-pink-200 rounded-md hover:bg-pink-400 border-2 border-pink-400 text-pink-900">Sign up</a>

            </div>
        
    </div>

    <section class="flex flex-col items-center justify-center gap-20 mt-20">
        <div class="flex flex-col md:flex-row md:gap-20">
            <div>
                <h1 class="text-4xl font-semibold">Create a note</h1>
                <p class="text-xl text-wrap max-w-xl">Unleash your thoughts with ease—craft a note effortlessly with our intuitive note creation feature. Capture ideas, reminders, and inspirations seamlessly, making the art of note-taking as simple as a click.</p>
            </div>
            
            <div class="">
                <div class="h-56 w-56 bg-blue-200 rounded-md border-2 border-slate-900 p-2 flex flex-col justify-between">
                    <div>
                        <h1 class="font-semibold text-xl">Todo</h1>
                        <p class="text-sm">
                            - Feed the cats <br/>
                            - Buy some eggs <br/>
                            - Wash the car <br/>
                        </p>
                    </div>
                    <p class="text-xs text-slate-500 italic">{{date('y/m/d h:m')}}</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:gap-20">
            <div x-data="{colour: 'bg-slate-200'}">
                @php
                    $colours = App\Models\Note::$noteColours;
                @endphp        
        
                <div class="">
                    <div :class="colour" class="h-56 w-56 rounded-md border-2 border-slate-900 p-2 flex flex-col justify-between">
                        <div>
                            <h1 class="font-semibold text-xl">Todo</h1>
                            <p class="text-sm">
                                - Feed the cats <br/>
                                - Buy some eggs <br/>
                                - Wash the car <br/>
                            </p>
                        </div>
                        <p class="text-xs text-slate-500 italic">{{date('y/m/d h:m')}}</p>
                    </div>
                </div>
                <div class="flex justify-evenly overflow-scroll mt-2">
                    {{-- 
                        required so tailwind will detect the classes
                        bg-slate-200 bg-yellow-200 bg-pink-200 bg-red-200 bg-green-200 bg--200 bg-blue-200 bg-orange-200 bg-cyan-200 bg-teal-200
                        
                        --}}
                    @foreach ($colours as $col)
                        <button type="button" class="rounded-full h-5 w-5 bg-{{$col}}-200 border-2 border-slate-900" x-on:click="colour = 'bg-{{$col}}-200'"></button>    
                    @endforeach
                </div>
                <p class="text-center text-sm text-slate-500">(click me)</p>

            </div>
            <div>
                <h1 class="text-4xl font-semibold">Style your note</h1>
                <p class="text-xl text-wrap max-w-xl">
                    Infuse your notes with the gentle charm of our meticlously selected pastel styles. 
                    Elevate your ideas with a touch of soft elegance as you effortlessly style your notes in soothing pastel hues. 
                </p>
            </div>

        </div>

    </section>
    
    <section class="h-56 flex flex-col items-center justify-center w-full`">
        <a class="text-xl bg-slate-200 p-5 font-semibold rounded-md" href="/login">Get started now</a>
    </section>
        

    <section class="p-2">
        
        <p>Built by
            <a href="https://github.com/Zed-Bailey" class="text-blue-950 underline">Zed</a> to learn Laravel --
            <a href="https://github.com/Zed-Bailey/gkeep" class="text-blue-950 underline">Project GitHub</a>
        </p>
        
    </section>

</div>
