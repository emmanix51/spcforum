@extends('layout.layout')
@section('content')
@if (session()->has('success'))
<div x-data="{show:true}" x-init="setTimeout(()=>show=false, 3000)" x-show="show"
    class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-spcmain text-white px-48 py-3" role="alert">
    <p>{{session('success')}}</p>

</div>
@endif
@include('shared.search-bar')
<a href="{{ route('dashboard') }}" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    @if(Auth::user()->id == $thread->user->id)
    <form action="{{ route('threads.destroy', $thread->id) }}" method="post">
        @csrf
        @method('delete')
        <a href="{{ route('threads.edit', $thread->id) }}" class="bg-red-600 p-2 text-white rounded">Edit Post</a>
        <button type="submit" class="bg-red-600 p-2 text-white rounded">Delete Post</button>
    </form>
    @endif


    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div class="flex flex-col">
            <div class="flex flex-row">
                <img class="w-24 mr-2 mb-2" src="{{ asset($collegelogo) }}" alt="" />
                <h3 class="text-2xl mb-2">{{ $college }}</h3>
                <div class="text-xl font-bold mb-4">{{ $thread->user->course }} - {{ $thread->user->yearlevel }}</div>
            </div>

            <h2 class="text-xl font-bold">{{ $thread->title }}</h2>
            <p class="text-base mb-6" style="overflow-wrap: break-word;">{{ $thread->content }}</p>
            <small class="font-italic">{{ $thread->created_at }}</small>
            <div class="border border-gray-200 w-full mb-6"></div>
            @include('shared.comments-box')
        </div>
    </div>

</div>
@endsection