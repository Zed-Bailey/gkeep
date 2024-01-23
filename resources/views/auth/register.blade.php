<x-layouts.app>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{$e}}</li>
            @endforeach
        </ul>
    @endif

    <form action="/register", method="POST" class="flex flex-col gap-3 max-w-96">
        @csrf
        <input type="text" name="name" value="{{old('name')}}"/>
        <input type="email" name="email" value="{{old('email')}}" />
        <input type="password" name="password" />
        <input type="password" name="password_confirmation" />
        <button type="submit">register</button>
    </form>



</x-layouts.app>