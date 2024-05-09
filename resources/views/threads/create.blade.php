@extends('layout.layout')

@section('content')

<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        @auth

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Post a thread</h2>
        </header>

        <form action="{{route('threads.create')}}" method="post">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />
                @error('title')
                <span class="text-xs text-red-600">{{$message}}</span>
                @enderror
            </div>
            {{-- <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Upload image(Optional)
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
            </div> --}}
            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    What's on your mind?
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="content" rows="10"
                    placeholder="Dont use bad words. N word is acceptable"></textarea>
                @error('content')
                <span class="text-xs text-red-600">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-spcmain text-white rounded py-2 px-4 hover:bg-black">
                    Post
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
        @endauth
        @guest
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Login to post a thread</h2>
        </header>
        @endguest
    </div>
</div>
@endsection