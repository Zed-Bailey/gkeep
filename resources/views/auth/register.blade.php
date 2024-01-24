<x-layouts.app>
    <div class="flex flex-col items-center ">
        
        <form method="POST" action="/register" class="flex flex-col gap-3 w-96">
            <h1 class="self-start text-2xl font-light">Sign Up</h1>
            <hr/>
            @csrf

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Username</label>
                <input type="text" name="name" placeholder="Username" value="{{old('name')}}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <span class="text-xs text-red-500">
                    @if ($errors->has("name"))
                        {{$errors->first("name")}}
                    @endif
                </span>
            </div>
            
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <span class="text-xs text-red-500">
                    @if ($errors->has("email"))
                        {{$errors->first("email")}}
                    @endif
                </span>
            </div>

            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" name="password" placeholder="Password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <span class="text-xs text-red-500">
                    @if ($errors->has("password"))
                        {{$errors->first("password")}}
                    @endif
                </span>
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                <input type="password" name="password_confirmation" placeholder="Retype password" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <span class="text-xs text-red-500">
                    @if ($errors->has("password_confirmation"))
                        {{$errors->first("password_confirmation")}}
                    @endif
                </span>
            </div>

            
            <button type="submit" class="w-full py-3 hover:bg-slate-200 rounded-md">Sign Up</button>
        </form>
    </div>



</x-layouts.app>