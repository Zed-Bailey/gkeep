
<div>    
    <div>
        <h2 class="text-3xl">Create a new note</h2>
    </div>

    <div class="flex justify-center">
        <form wire:submit="saveClicked">
            <div class="border-2 border-slate-900 rounded-md w-96 p-2 bg-{{$selectedColour}}-200">                
                <input required placeholder="Title" wire:model="newNoteTitle" class="bg-transparent focus:ring-transparent text-lg w-full font-bold"/>
                <textarea required class="w-full bg-transparent text-sm h-48 resize-none" wire:model="newNoteBody" placeholder="your note..."></textarea>

                <div class="flex justify-evenly overflow-scroll mb-2">
                    {{-- 
                        required so tailwind will detect the classes
                        bg-slate-200 bg-yellow-200 bg-pink-200 bg-red-200 bg-green-200 bg--200 bg-blue-200 bg-orange-200 bg-cyan-200 bg-teal-200
                        
                        --}}
                    @foreach ($colours as $col)
                        <button type="button" class="rounded-full h-5 w-5 bg-{{$col}}-200 border-2 border-slate-900" wire:click="changedColour('{{$col}}')"></button>    
                    @endforeach
        
                </div>
                <button class="w-full py-2 hover:bg-{{$col}}-300 hover:font-bold rounded-md" type="submit">save</button>
            </div>
        </form>

        

    </div>
    
    @if (count($userNotes) > 0)
        <div>
            <h2 class="text-3xl">Your Notes</h2>
        </div>
        
        <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center">
        
            @foreach ($userNotes as $note)
            
                <x-note-card :note="$note" x-on:click="$wire.goToEdit({{$note->id}})" />

            @endforeach

            
            
        </div>
        
        
    @else
        <div class="flex justify-center mt-10">
            <p class="text-slate-500 text-xl italic">No notes yet....add one!</p>
        </div>
    @endif
    
</div>
