<div class="group relative bg-{{$note->colour}}-200 rounded-md border-2 border-slate-900 min-w-52 max-w-96 h-72 p-2 flex flex-col justify-between hover:shadow-lg hover:cursor-pointer ">
    
    <button class="hidden group-hover:inline group-hover:absolute top-2 right-2 text-red-400 hover:text-red-500">
        <x-phosphor-trash-simple-duotone class="h-6 w-6"/>
    </button>

    <div>
        <h3 class="text-2xl">{{$note->title}}</h3>
        <p class="text-sm">
            {{$note->body}}
        </p>
    </div>
    <p class="text-xs italic text-slate-700">{{$note->updated_at}}</p>    
</div>   