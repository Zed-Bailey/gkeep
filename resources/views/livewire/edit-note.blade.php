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
        
        <div class="w-96 min-h-72 p-2  bg-{{$note->colour}}-200 border-2 border-slate-900 rounded-md">
            <input wire:model="title" placeholder="Title..." class="w-full bg-transparent"/>
            
            <textarea wire:model="body" class="w-full h-full bg-transparent" placeholder="Note..."></textarea>
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
