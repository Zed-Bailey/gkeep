<div class="max-w-4xl mx-auto">
    <div>
        <h2 class="text-3xl">Hi {{ $user->name }}, create a new note?</h2>
        <p class="italic text-slate-500">Today is {{ date('d/m/Y') }}</p>
    </div>

    <div class="flex justify-center mt-5">
        <form wire:submit="saveClicked">
            <div class="border-2 border-slate-900 rounded-md w-96 p-2 bg-{{ $selectedColour }}-200">
                <input required placeholder="Title" wire:model="newNoteTitle"
                    class="bg-transparent focus:ring-transparent text-lg w-full font-bold" />
                <textarea required class="w-full bg-transparent text-sm h-48 resize-none" wire:model="newNoteBody"
                    placeholder="your note..."></textarea>

                <div class="flex justify-evenly overflow-scroll mb-2">
                    {{-- 
                        required so tailwind will detect the classes
                        bg-slate-200 bg-yellow-200 bg-pink-200 bg-red-200 bg-green-200 bg-blue-200 bg-orange-200 bg-cyan-200 bg-teal-200
                        bg-slate-300 bg-yellow-300 bg-pink-300 bg-red-300 bg-green-300 bg-blue-300 bg-orange-300 bg-cyan-300 bg-teal-300
                        --}}
                    @foreach ($colours as $col)
                        <button type="button"
                            class="rounded-full h-5 w-5 bg-{{ $col }}-200 border-2 border-slate-900"
                            wire:click="changedColour('{{ $col }}')"></button>
                    @endforeach

                </div>
                <button class="w-full py-2 hover:bg-{{ $col }}-300 hover:font-bold rounded-md"
                    type="submit">save</button>
            </div>
        </form>



    </div>

    @if (count($userNotes) > 0)
        <div class="flex justify-between items-center flex-wrap mt-5">
            <div>
                <h2 class="text-3xl">Your Notes</h2>
                @php

                    $count = $user->notes()->count();
                    $text = $count > 1 ? 'notes' : 'note';
                @endphp
                <span class="text-slate-500">You have {{ $count }} {{ $text }}</span>
            </div>

            <div>
                <div class="w-96">
                    <input type="text"  wire:model.live="filterText" placeholder="Filter by tag" id="tagFilter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 justify-center mt-5 w-full max-w-3xl px-4">
                @php
                    $filteredNotes = $user->notes;
                    if($filterText != '') {
                        // selects all ids for notes with tags starting with the filter query
                        $ids = $user->notes()
                            ->select('notes.id')
                            ->join('tags', 'note_id', 'notes.id')
                            ->where('tags.tagName', 'like', $filterText . '%')->get();

                        $filteredNotes = App\Models\Note::find($ids);
                    }

                @endphp
                
                @if($filteredNotes->count() == 0) 
                    <div class="col-span-12 flex justify-center">
                        <p class="text-slate-500 text-xl italic">No notes matched that tag search</p>
                    </div>
                @else
                    @foreach ($filteredNotes as $note)
                        <x-note-card :note="$note" x-on:click="$wire.goToEdit({{ $note->id }})" />
                    @endforeach
                @endif
                

            </div>
        </div>
    @else
        <div class="flex justify-center mt-10">
            <p class="text-slate-500 text-xl italic">No notes yet....add one!</p>
        </div>
    @endif

</div>
