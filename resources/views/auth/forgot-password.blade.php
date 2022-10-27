<x-layout>
    <div class="w-2/4 m-auto mt-5">

        <div class="text-center">
            <h1 class="text-3xl font-bold underline">Forgot Password</h1>
        </div>

        @if(session('status'))
        <div class="mt-5 bg-green-100 border boder-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('status') }}</span>
        </div>
        @endif

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST"
            action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                    id="email" type="email" placeholder="email" name="email" value="{{ old('email') }}">

                @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Reset Password
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2020 Acme Corp. All rights reserved.
        </p>
    </div>
</x-layout>
