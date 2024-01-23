<x-layouts.app>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{$e}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/login" class="flex flex-col gap-3 max-w-96">
        @csrf
        <input type="email" name="email" value="{{old('email')}}"/>
        <input type="password" name="password" />
        <button type="submit">Login</button>
    </form>
</x-layouts.app>