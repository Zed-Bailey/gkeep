<div class="mx-auto max-w-4xl">
    <div class="w-full">
        <div class="flex justify-between">
            <button class="flex align-middle items-center p-2 rounded hover:bg-slate-200" wire:click="navigate">
                <x-phosphor-arrow-left-duotone class="h-7 w-7" />
                <span class="text-lg font-semibold">Back</span>
            </button>
    
            <button wire:click="delete"
                class="flex gap-3 align-middle bg-red-100 text-red-500 hover:bg-red-200 p-2 rounded-md hover:outline hover:outline-2  hover:outline-red-500">
                <x-phosphor-trash-simple-duotone class="h-6 w-6" />
                Delete Note
            </button>
        </div>
    
    
        <h1 class="text-3xl my-3">Edit Note</h1>
        <div class="flex flex-col items-center">
            
            <div class="flex justify-between mb-2 w-full max-w-96 items-end gap-3">
                <div class="w-full">
                    <label for="tagInput" class="block text-xs self-start">Add a tag to the note</label>        
                    <input wire:model="tagValue" id="tagInput" placeholder="Tag Name..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                </div>
                
                <button wire:click="addTag" class="p-2 hover:bg-slate-200 rounded-md">
                    <x-phosphor-plus-bold class="w-6 h-6"/>
                </button>
            </div>

            <div class="flex-col items-center max-w-96">
    
                <div class="w-96  p-2  bg-{{ $note->colour }}-200 border-2 border-slate-900 rounded-md">
                    <input wire:model="title" placeholder="Title..." class="w-full bg-transparent font-bold text-xl" />
                    <div class="flex overflow-scroll text-xs items-center align-middle text-slate-600 gap-2">
                        @if($note->tag()->count() > 0)
                            <p class="font-semibold ">Tags</p>
                        @endif
                        @foreach ($note->tag as $tag)
                            <span class="inline-flex gap-3 py-1.5 px-2 group hover:cursor-pointer rounded-full hover:bg-black hover:text-white" wire:click="removeTag('{{$tag->id}}')">
                                {{$tag->tagName}}
                                <x-phosphor-x class="hidden group-hover:block h-4 w-4"/>
                            </span>
                        @endforeach
                    </div>
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
                        <button type="button"
                            class="rounded-full h-5 w-5 bg-{{ $col }}-200 border-2 border-slate-900"
                            wire:click="changedColour('{{ $col }}')"></button>
                    @endforeach
    
                </div>
    
                <div class="flex justify-evenly mt-4">
                    <button
                        class="flex gap-3 align-middle bg-red-100 text-red-500 hover:bg-red-200 p-2 rounded-md hover:outline hover:outline-2  hover:outline-red-500">
                        <x-phosphor-x-circle-duotone class="h-6 w-6" />
                        Discard Changes
                    </button>
    
                    <button wire:click="save"
                        class="flex gap-3 align-middle bg-green-100 text-green-500 hover:bg-green-200 p-2 rounded-md hover:outline hover:outline-2  hover:outline-green-500">
                        <x-phosphor-check-fat-duotone class="h-6 w-6" />
                        Save Changes
                    </button>
                </div>
    
            </div>
    
    
        </div>
    
    
    
    
    
    </div>
    
</div>
