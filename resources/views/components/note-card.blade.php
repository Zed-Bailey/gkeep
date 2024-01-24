
<div {{$attributes}} class="bg-{{$note->colour}}-200 rounded-md border-2 border-slate-900 w-full  h-72 p-2 flex flex-col justify-between
    hover:cursor-pointer hover:-translate-x-1 hover:-translate-y-2 hover:shadow-solid-sm">
    

    <div>
        <h3 class="text-2xl">{{$note->title}}</h3>
        <p class="text-sm line-clamp-6">
            {{$note->body}}
        </p>
    </div>
    <p class="text-xs italic text-slate-700">Last edit: {{$note->updated_at}}</p>    
</div>   