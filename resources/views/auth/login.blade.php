@extends('layout.layout')
@section('content')

<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Log In</h2>
        </header>

        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />
                @error('email')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                @error('password')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-spcmain text-white rounded py-2 px-4 hover:bg-black">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-spcmain">Register</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection