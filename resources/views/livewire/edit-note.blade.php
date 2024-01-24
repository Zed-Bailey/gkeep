<div>
    
    <div class="flex justify-between">
        <button class="flex align-middle items-center p-2 rounded hover:bg-slate-200" wire:click="navigate">
            <x-phosphor-arrow-left-duotone class="h-7 w-7"/>
            <span class="text-lg font-semibold">Back</span>
        </button>

        <button wire:click="delete" class="flex gap-3 align-middle bg-red-100 text-red-500 hover:bg-red-200 p-2 rounded-md hover:outline hover:outline-2  hover:outline-red-500">
            <x-phosphor-trash-simple-duotone class="h-6 w-6"/>
            Delete Note
        </button>
    </div>    
    

    <h1 class="text-3xl my-3">Edit Note</h1>
    <div class="flex-col items-center max-w-96">
        
        <div class="w-96  p-2  bg-{{$note->colour}}-200 border-2 border-slate-900 rounded-md">
            <input wire:model="title" placeholder="Title..." class="w-full bg-transparent"/>
            <textarea class="w-full bg-transparent text-sm h-72 resize-none" wire:model="body" placeholder="your note..."></textarea>
            
        </div>

        @php
            $colours = App\Models\Note::$noteColours;
        @endphp

        <div class="flex justify-evenly overflow-scroll my-2">
            {{-- 
                required so tailwind will detect the classes
                bg-slate-200 bg-yellow-200 bg-pink-200 bg-red-200 bg-green-200 bg--200 bg-blue-200 bg-orange-200 bg-cyan-200 bg-teal-200
                
                --}}
            @foreach ($colours as $col)
                <button type="button" class="rounded-full h-5 w-5 bg-{{$col}}-200 border-2 border-slate-900" wire:click="changedColour('{{$col}}')"></button>    
            @endforeach

        </div>

        <div class="flex justify-evenly mt-4">
            <button class="flex gap-3 align-middle bg-red-100 text-red-500 hover:bg-red-200 p-2 rounded-md hover:outline hover:outline-2  hover:outline-red-500">
                <x-phosphor-x-circle-duotone class="h-6 w-6"/>
                Discard Changes
            </button>

            <button wire:click="save" class="flex gap-3 align-middle bg-green-100 text-green-500 hover:bg-green-200 p-2 rounded-md hover:outline hover:outline-2  hover:outline-green-500">
                <x-phosphor-check-fat-duotone class="h-6 w-6"/>
                Save Changes
            </button>
        </div>

    </div>
    



</div>
